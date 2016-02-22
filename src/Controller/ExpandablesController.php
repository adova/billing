<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Expandables Controller
 *
 * @property \App\Model\Table\ExpandablesTable $Expandables
 */
class ExpandablesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $expandables = $this->paginate($this->Expandables);

        $this->set(compact('expandables'));
        $this->set('_serialize', ['expandables']);
    }

    /**
     * View method
     *
     * @param string|null $id Expandable id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expandable = $this->Expandables->get($id, [
            'contain' => ['Users', 'Informations']
        ]);

        $this->set('expandable', $expandable);
        $this->set('_serialize', ['expandable']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expandable = $this->Expandables->newEntity();
        if ($this->request->is('post')) {
            $expandable = $this->Expandables->patchEntity($expandable, $this->request->data);
            if ($this->Expandables->save($expandable)) {
                $this->Flash->success(__('The expandable has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expandable could not be saved. Please, try again.'));
            }
        }
        $users = $this->Expandables->Users->find('list', ['limit' => 200]);
        $this->set(compact('expandable', 'users'));
        $this->set('_serialize', ['expandable']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expandable id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expandable = $this->Expandables->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expandable = $this->Expandables->patchEntity($expandable, $this->request->data);
            if ($this->Expandables->save($expandable)) {
                $this->Flash->success(__('The expandable has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expandable could not be saved. Please, try again.'));
            }
        }
        $users = $this->Expandables->Users->find('list', ['limit' => 200]);
        $this->set(compact('expandable', 'users'));
        $this->set('_serialize', ['expandable']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expandable id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expandable = $this->Expandables->get($id);
        if ($this->Expandables->delete($expandable)) {
            $this->Flash->success(__('The expandable has been deleted.'));
        } else {
            $this->Flash->error(__('The expandable could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
