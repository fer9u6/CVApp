<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Languajes Controller
 *
 * @property \App\Model\Table\LanguajesTable $Languajes
 *
 * @method \App\Model\Entity\Languaje[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LanguajesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cvs']
        ];
        $languajes = $this->paginate($this->Languajes);

        $this->set(compact('languajes'));
    }

    /**
     * View method
     *
     * @param string|null $id Languaje id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $languaje = $this->Languajes->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('languaje', $languaje);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $languaje = $this->Languajes->newEntity();
        if ($this->request->is('post')) {
            $languaje = $this->Languajes->patchEntity($languaje, $this->request->getData());
            if ($this->Languajes->save($languaje)) {
                $this->Flash->success(__('The languaje has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The languaje could not be saved. Please, try again.'));
        }
        $cvs = $this->Languajes->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('languaje', 'cvs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Languaje id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $languaje = $this->Languajes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $languaje = $this->Languajes->patchEntity($languaje, $this->request->getData());
            if ($this->Languajes->save($languaje)) {
                $this->Flash->success(__('The languaje has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The languaje could not be saved. Please, try again.'));
        }
        $cvs = $this->Languajes->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('languaje', 'cvs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Languaje id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $languaje = $this->Languajes->get($id);
        if ($this->Languajes->delete($languaje)) {
            $this->Flash->success(__('The languaje has been deleted.'));
        } else {
            $this->Flash->error(__('The languaje could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
