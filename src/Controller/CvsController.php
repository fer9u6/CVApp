<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cvs Controller
 *
 * @property \App\Model\Table\CvsTable $Cvs
 *
 * @method \App\Model\Entity\Cv[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CvsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cvs = $this->paginate($this->Cvs);

        $this->set(compact('cvs'));
    }

    /**
     * View method
     *
     * @param string|null $id Cv id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null,$userid=null)
    {    $this->set('theuserid', $userid);
        $cvs = $this->Cvs->get($id, [
            'contain' => ['Users', 'Educations', 'Experiences', 'Languajes', 'OtherJobs']
        ]);

        $this->set('cv', $cvs);
		
		$this->loadModel("Users");
		$user = $this->Users->get($cvs->user_id, [
            'contain' => ['Cvs']
        ]);
		
        $this->set('user', $user);
    }
	
	public function micv($id = null)
    {
        $cv = $this->Cvs->get($id, [
            'contain' => ['Users', 'Educations', 'Experiences', 'Languajes', 'OtherJobs']
        ]);

        $this->set('cv', $cv);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cv = $this->Cvs->newEntity();
        if ($this->request->is('post')) {
            $cv = $this->Cvs->patchEntity($cv, $this->request->getData());
            if ($this->Cvs->save($cv)) {
                $this->Flash->success(__('El Cv fue guardado satisfactoriamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Cv no se pudo guardar.Por favor, intente otra vez.'));
        }
        $this->set(compact('cv'));
    }
	
	/**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
	 funcion crear nuevo cv para el usuario
     */
    public function nuevo($id = null)
    {
		//$this->loadModel('Education');
        $cv = $this->Cvs->newEntity([
			'user_id' => $id
		]);
        if ($this->request->is('post')) {
            $cv = $this->Cvs->patchEntity($cv, $this->request->getData(), [
				'associated' => [
					'Educations',
					'Experiences',
					'Languajes',
					'OtherJobs'
				]
			]);
			$cv->user_id = $id;
            if ($this->Cvs->save($cv)) {
                $this->Flash->success(__('El Cv fue guardado satisfactoriamente.'));

                return $this->redirect(['controller' => 'users', 'action' => 'profile', $id]);
            }
            $this->Flash->error(__('El Cv no se pudo guardar.Por favor, intente otra vez.'));
        }
        $this->set(compact('cv'));
		
	
    }
	
	public function search($userid = null, $category = null) 
    {
		//$this->Flash->success($this->request->getData()['enviousuario']);
		$this->set('theuserid', $userid);
		if ($this->request->is('post')) {
			if($this->request->getData('radio') != null)
			{
				
				//$this->Flash->error($this->request->getData()['check']);
				return $this->redirect(['action' => 'search', $this->request->getData()['d_id'], $this->request->getData('radio')]);
			}
			else
			{
				$this->Flash->error(__('check no trajo nada'));
				$this->paginate = ['all'];
				$cvs = $this->paginate($this->Cvs);
				$this->set(compact('cvs'));
				return;
			}
		}
		
		if($category == "todo")
		{
			$this->paginate = ['all'];
		}
		else
		{
			$this->paginate = [
			'conditions' => ['category' => $category] //Ocupara un contain? Creo que no
        ];
		}
		
		$cvs = $this->paginate($this->Cvs);

        $this->set(compact('cvs'));

    }
	
	public function agregarOtroTrabajo1($number= null)
    {
		echo $this->Form->input("other_jobs.{$number}.description",['label' => 'Descripción']);
		echo $this->Form->input("other_jobs.{$number}.since",['label' => 'desde']); 
		echo $this->Form->input("other_jobs.{$number}.until",['label' => 'hasta']);
    }
	
	public function verificarBorrado($id = null)
	{
		 $cvs = $this->Cvs->get($id, [
            'contain' => ['Users', 'Educations', 'Experiences', 'Languajes', 'OtherJobs']
        ]);

        $this->set('cv', $cvs);
	}

    /**
     * Edit method
     *
     * @param string|null $id Cv id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
       
		 $cv = $this->Cvs->get($id, [
            'contain' => ['Users', 'Educations', 'Experiences', 'Languajes', 'OtherJobs']
        ]);
		
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cv = $this->Cvs->patchEntity($cv, $this->request->getData(), [
				'associated' => [
					'Educations',
					'Experiences',
					'Languajes',
					'OtherJobs'
				  ]
				]);
            if ($this->Cvs->save($cv)) {
                $this->Flash->success(__('El Cv fue guardado satisfactoriamente.'));

                return $this->redirect(['controller' => 'users', 'action' => 'profile', $cv->user_id]);
            }
            $this->Flash->error(__('El Cv no se pudo guardar.Por favor, intente otra vez.'));
        }
		$cvs = $this->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('cv'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cv id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		$cv = $this->Cvs->get($id, [
            'contain' => ['Users', 'Educations', 'Experiences', 'Languajes', 'OtherJobs']
        ]);
		
        $this->request->allowMethod(['post', 'delete']);
		 
		$cv = $this->Cvs->patchEntity($cv, $this->request->getData(), [
				'associated' => [
					'Educations',
					'Experiences',
					'Languajes',
					'OtherJobs'
				  ]
				]);
		
        if ($this->Cvs->delete($cv)) {
            $this->Flash->success(__('The cv has been deleted.'));
        } else {
            $this->Flash->error(__('El Cv no se pudo guardar.Por favor, intente otra vez.'));
        }

        return $this->redirect(['controller'=>'users','action' => 'profile',$cv->user_id]);
    }
}
