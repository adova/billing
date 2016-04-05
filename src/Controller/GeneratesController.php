<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Generates Controller
 *
 * @property \App\Model\Table\GeneratesTable $Generates
 */
class GeneratesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PackageUsers', 'BillingTypes']
        ];
        $generates = $this->paginate($this->Generates);

        $this->set(compact('generates'));
        $this->set('_serialize', ['generates']);
    }

    /**
     * View method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generate = $this->Generates->get($id, [
            'contain' => ['PackageUsers', 'BillingTypes']
        ]);

        $this->set('generate', $generate);
        $this->set('_serialize', ['generate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generate = $this->Generates->newEntity();
        if ($this->request->is('post')) {
            $generate = $this->Generates->patchEntity($generate, $this->request->data);
            if ($this->Generates->save($generate)) {
                $this->Flash->success(__('The generate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The generate could not be saved. Please, try again.'));
            }
        }
        $packageUsers = $this->Generates->PackageUsers->find('list', ['limit' => 200]);
        $billingTypes = $this->Generates->BillingTypes->find('list', ['limit' => 200]);
        $this->set(compact('generate', 'packageUsers', 'billingTypes'));
        $this->set('_serialize', ['generate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generate = $this->Generates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generate = $this->Generates->patchEntity($generate, $this->request->data);
            if ($this->Generates->save($generate)) {
                $this->Flash->success(__('The generate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The generate could not be saved. Please, try again.'));
            }
        }
        $packageUsers = $this->Generates->PackageUsers->find('list', ['limit' => 200]);
        $billingTypes = $this->Generates->BillingTypes->find('list', ['limit' => 200]);
        $this->set(compact('generate', 'packageUsers', 'billingTypes'));
        $this->set('_serialize', ['generate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generate = $this->Generates->get($id);
        if ($this->Generates->delete($generate)) {
            $this->Flash->success(__('The generate has been deleted.'));
        } else {
            $this->Flash->error(__('The generate could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
