<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OtherJobs Controller
 *
 * @property \App\Model\Table\OtherJobsTable $OtherJobs
 *
 * @method \App\Model\Entity\OtherJob[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OtherJobsController extends AppController
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
        $otherJobs = $this->paginate($this->OtherJobs);

        $this->set(compact('otherJobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Other Job id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $otherJob = $this->OtherJobs->get($id, [
            'contain' => ['Cvs']
        ]);

        $this->set('otherJob', $otherJob);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $otherJob = $this->OtherJobs->newEntity();
        if ($this->request->is('post')) {
            $otherJob = $this->OtherJobs->patchEntity($otherJob, $this->request->getData());
            if ($this->OtherJobs->save($otherJob)) {
                $this->Flash->success(__('The other job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The other job could not be saved. Please, try again.'));
        }
        $cvs = $this->OtherJobs->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('otherJob', 'cvs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Other Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $otherJob = $this->OtherJobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $otherJob = $this->OtherJobs->patchEntity($otherJob, $this->request->getData());
            if ($this->OtherJobs->save($otherJob)) {
                $this->Flash->success(__('The other job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The other job could not be saved. Please, try again.'));
        }
        $cvs = $this->OtherJobs->Cvs->find('list', ['limit' => 200]);
        $this->set(compact('otherJob', 'cvs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Other Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $otherJob = $this->OtherJobs->get($id);
        if ($this->OtherJobs->delete($otherJob)) {
            $this->Flash->success(__('The other job has been deleted.'));
        } else {
            $this->Flash->error(__('The other job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
