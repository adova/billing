<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PreviousPackages Controller
 *
 * @property \App\Model\Table\PreviousPackagesTable $PreviousPackages
 */
class PreviousPackagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Packages']
        ];
        $previousPackages = $this->paginate($this->PreviousPackages);

        $this->set(compact('previousPackages'));
        $this->set('_serialize', ['previousPackages']);
    }

    /**
     * View method
     *
     * @param string|null $id Previous Package id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $previousPackage = $this->PreviousPackages->get($id, [
            'contain' => ['Packages']
        ]);

        $this->set('previousPackage', $previousPackage);
        $this->set('_serialize', ['previousPackage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $previousPackage = $this->PreviousPackages->newEntity();
        if ($this->request->is('post')) {
            $previousPackage = $this->PreviousPackages->patchEntity($previousPackage, $this->request->data);
            if ($this->PreviousPackages->save($previousPackage)) {
                $this->Flash->success(__('The previous package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The previous package could not be saved. Please, try again.'));
            }
        }
        $packages = $this->PreviousPackages->Packages->find('list', ['limit' => 200]);
        $this->set(compact('previousPackage', 'packages'));
        $this->set('_serialize', ['previousPackage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Previous Package id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $previousPackage = $this->PreviousPackages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $previousPackage = $this->PreviousPackages->patchEntity($previousPackage, $this->request->data);
            if ($this->PreviousPackages->save($previousPackage)) {
                $this->Flash->success(__('The previous package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The previous package could not be saved. Please, try again.'));
            }
        }
        $packages = $this->PreviousPackages->Packages->find('list', ['limit' => 200]);
        $this->set(compact('previousPackage', 'packages'));
        $this->set('_serialize', ['previousPackage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Previous Package id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $previousPackage = $this->PreviousPackages->get($id);
        if ($this->PreviousPackages->delete($previousPackage)) {
            $this->Flash->success(__('The previous package has been deleted.'));
        } else {
            $this->Flash->error(__('The previous package could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
