<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BillingTypes Controller
 *
 * @property \App\Model\Table\BillingTypesTable $BillingTypes
 */
class BillingTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $billingTypes = $this->paginate($this->BillingTypes);

        $this->set(compact('billingTypes'));
        $this->set('_serialize', ['billingTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Billing Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billingType = $this->BillingTypes->get($id, [
            'contain' => ['Generates']
        ]);

        $this->set('billingType', $billingType);
        $this->set('_serialize', ['billingType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billingType = $this->BillingTypes->newEntity();
        if ($this->request->is('post')) {
            $billingType = $this->BillingTypes->patchEntity($billingType, $this->request->data);
            if ($this->BillingTypes->save($billingType)) {
                $this->Flash->success(__('The billing type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingType'));
        $this->set('_serialize', ['billingType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billingType = $this->BillingTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billingType = $this->BillingTypes->patchEntity($billingType, $this->request->data);
            if ($this->BillingTypes->save($billingType)) {
                $this->Flash->success(__('The billing type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingType'));
        $this->set('_serialize', ['billingType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billingType = $this->BillingTypes->get($id);
        if ($this->BillingTypes->delete($billingType)) {
            $this->Flash->success(__('The billing type has been deleted.'));
        } else {
            $this->Flash->error(__('The billing type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
