<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeeTypes Controller
 *
 * @property \App\Model\Table\EmployeeTypesTable $EmployeeTypes
 *
 * @method \App\Model\Entity\EmployeeType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $employeeTypes = $this->paginate($this->EmployeeTypes);

        $this->set(compact('employeeTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeType = $this->EmployeeTypes->get($id, [
            'contain' => ['EmployeesDetails']
        ]);

        $this->set('employeeType', $employeeType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeeType = $this->EmployeeTypes->newEntity();
        if ($this->request->is('post')) {
            $employeeType = $this->EmployeeTypes->patchEntity($employeeType, $this->request->getData());
            if ($this->EmployeeTypes->save($employeeType)) {
                $this->Flash->success(__('The employee type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee type could not be saved. Please, try again.'));
        }
        $this->set(compact('employeeType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeType = $this->EmployeeTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeType = $this->EmployeeTypes->patchEntity($employeeType, $this->request->getData());
            if ($this->EmployeeTypes->save($employeeType)) {
                $this->Flash->success(__('The employee type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee type could not be saved. Please, try again.'));
        }
        $this->set(compact('employeeType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeType = $this->EmployeeTypes->get($id);
        if ($this->EmployeeTypes->delete($employeeType)) {
            $this->Flash->success(__('The employee type has been deleted.'));
        } else {
            $this->Flash->error(__('The employee type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
