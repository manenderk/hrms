<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeesDetails Controller
 *
 * @property \App\Model\Table\EmployeesDetailsTable $EmployeesDetails
 *
 * @method \App\Model\Entity\EmployeesDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'States', 'Countries', 'EmployeeTypes']
        ];
        $employeesDetails = $this->paginate($this->EmployeesDetails);

        $this->set(compact('employeesDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesDetail = $this->EmployeesDetails->get($id, [
            'contain' => ['Cities', 'States', 'Countries', 'EmployeeTypes']
        ]);

        $this->set('employeesDetail', $employeesDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesDetail = $this->EmployeesDetails->newEntity();
        if ($this->request->is('post')) {
            $employeesDetail = $this->EmployeesDetails->patchEntity($employeesDetail, $this->request->getData());
            $employeesDetail['created_by'] = $this->Auth->user('id');
            $employeesDetail['modified_by'] = $this->Auth->user('id');
            if ($this->EmployeesDetails->save($employeesDetail)) {
                $this->Flash->success(__('The employees detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees detail could not be saved. Please, try again.'));
        }
        //$cities = $this->EmployeesDetails->Cities->find('list', ['limit' => 200]);
        //$states = $this->EmployeesDetails->States->find('list', ['limit' => 200]);
        $countries = $this->EmployeesDetails->Countries->find('list', ['limit' => 200]);
        $employeeTypes = $this->EmployeesDetails->EmployeeTypes->find('list', ['limit' => 200]);
        //$this->set(compact('employeesDetail', 'cities', 'states', 'countries', 'employeeTypes'));
        $this->set(compact('employeesDetail', 'countries', 'employeeTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesDetail = $this->EmployeesDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesDetail = $this->EmployeesDetails->patchEntity($employeesDetail, $this->request->getData());
            if ($this->EmployeesDetails->save($employeesDetail)) {
                $this->Flash->success(__('The employees detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees detail could not be saved. Please, try again.'));
        }
        //$cities = $this->EmployeesDetails->Cities->find('list', ['limit' => 200]);
        //$states = $this->EmployeesDetails->States->find('list', ['limit' => 200]);
        $countries = $this->EmployeesDetails->Countries->find('list', ['limit' => 200]);
        $employeeTypes = $this->EmployeesDetails->EmployeeTypes->find('list', ['limit' => 200]);
        //$this->set(compact('employeesDetail', 'cities', 'states', 'countries', 'employeeTypes'));
        $this->set(compact('employeesDetail', 'countries', 'employeeTypes'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesDetail = $this->EmployeesDetails->get($id);
        if ($this->EmployeesDetails->delete($employeesDetail)) {
            $this->Flash->success(__('The employees detail has been deleted.'));
        } else {
            $this->Flash->error(__('The employees detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
