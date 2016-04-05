<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PackageUsers Controller
 *
 * @property \App\Model\Table\PackageUsersTable $PackageUsers
 */
class PackageUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Packages']
        ];
        $packageUsers = $this->paginate($this->PackageUsers);

        $this->set(compact('packageUsers'));
        $this->set('_serialize', ['packageUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Package User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageUser = $this->PackageUsers->get($id, [
            'contain' => ['Users', 'Packages', 'Generates']
        ]);

        $this->set('packageUser', $packageUser);
        $this->set('_serialize', ['packageUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageUser = $this->PackageUsers->newEntity();
        if ($this->request->is('post')) {
            $packageUser = $this->PackageUsers->patchEntity($packageUser, $this->request->data);
            if ($this->PackageUsers->save($packageUser)) {
                $this->Flash->success(__('The package user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The package user could not be saved. Please, try again.'));
            }
        }
        $users = $this->PackageUsers->Users->find('list', ['limit' => 200]);
        $packages = $this->PackageUsers->Packages->find('list', ['limit' => 200]);
        $this->set(compact('packageUser', 'users', 'packages'));
        $this->set('_serialize', ['packageUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Package User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageUser = $this->PackageUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageUser = $this->PackageUsers->patchEntity($packageUser, $this->request->data);
            if ($this->PackageUsers->save($packageUser)) {
                $this->Flash->success(__('The package user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The package user could not be saved. Please, try again.'));
            }
        }
        $users = $this->PackageUsers->Users->find('list', ['limit' => 200]);
        $packages = $this->PackageUsers->Packages->find('list', ['limit' => 200]);
        $this->set(compact('packageUser', 'users', 'packages'));
        $this->set('_serialize', ['packageUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Package User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageUser = $this->PackageUsers->get($id);
        if ($this->PackageUsers->delete($packageUser)) {
            $this->Flash->success(__('The package user has been deleted.'));
        } else {
            $this->Flash->error(__('The package user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
