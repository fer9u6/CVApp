<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Routing\Router;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	  
	
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['*']);
    }

	  
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cvs']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('user', $user);
    }
	
	public function profile($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('user', $user);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario fue creado satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no se pudo guardar.Por favor, intente otra vez.'));
        }
        $cvs = $this->Users->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'cvs'));
    }
	
	public function signup()
    {
        $user = $this->Users->newEntity();
		$valid = true;
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
			if(	$user->name == "" || $user->lastname == "" || $user->email == "" 
				|| $user->password == "" || $this->request->getData()['confirmpassword'] == "")
			{
				$this->Flash->error('Falta completar espacios obligatorios.');
				$valid = false;
			}
			else if($user->password != (new DefaultPasswordHasher)->check($this->request->getData()['confirmpassword'], $user->password))
			{
				/*
				$hash = (new DefaultPasswordHasher)->hash($this->request->getData()['confirmpassword']);
				$this->Flash->error($user->password);
				$this->Flash->error($hash);
				$this->Flash->error((new DefaultPasswordHasher)->hash($hash));
				*/
				$this->Flash->error('Las contraseñas no concuerdan');
				$valid = false;
			}
			if($valid)
			{
				//return $this->redirect(['action' => 'signup']);
				if ($this->Users->save($user)) {
					$this->Flash->success('El usuario ha sido guardado satisfactoriamente.');

					return $this->redirect(['action' => 'login']);
				}
			}
            
            //$this->Flash->error(__('El usuario no ha podido ser guardado. Por favor intentelo nuevamente'));
        }
        $cvs = $this->Users->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'cvs'));
    }
	
	public function login(){
		$this->viewBuilder()->setLayout('loginview');
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
				$id = $this->Auth->user('id'); //Esto sí funciona
				//Se enviaria a esta pagina si el login es exitoso
				return $this->redirect(['action' => 'profile', $id]);
                //return $this->redirect(['action' => 'profile', $authUserId]);
            }
			else {
            // Bad Login
            //$this->Flash->error('Inicio de sesión incorrecto');
			}
        }
    }
	
	public function logout(){
         //$this->Flash->success('Cerró su sesión exitosamente');
         return $this->redirect($this->Auth->logout());
    }
	
	public function invitado()
	{
		//$this->request->allowMethod(['post']);
		return $this->redirect(['controller' => 'cvs', 'action' => 'search', -1, "todo"]);
	}

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('theid', $id);
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Los cambios han sido guardados');

                return $this->redirect(['action' => 'profile', $id]);
            }
            $this->Flash->error('Los cambios no pudieron ser guardados. Por favor intentelo nuevamente');
        }
        $cvs = $this->Users->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'cvs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
