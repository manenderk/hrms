<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HrmsDepartments Controller
 *
 * @property \App\Model\Table\HrmsDepartmentsTable $HrmsDepartments
 *
 * @method \App\Model\Entity\HrmsDepartment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsDepartmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->getData('name'))) {
                $department_name = $this->request->getData('name');
                $limit = 1000;
            } else {
                $department_name = '';
                $limit = 10;
            }
        } else {
            $department_name = '';
            $limit = 10;
        }
        $this->paginate = [
            'conditions' => array(
                'department_name LIKE' => '%' . $department_name . '%'
            ),
            'limit' => $limit,
            'order' => [
                'department_name' => 'asc'
            ]
        ];

        $hrmsDepartments = $this->paginate($this->HrmsDepartments);

        $this->set(compact('hrmsDepartments'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Department id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrmsDepartment = $this->HrmsDepartments->get($id, [
            'contain' => []
        ]);

        $this->set('hrmsDepartment', $hrmsDepartment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsDepartment = $this->HrmsDepartments->newEntity();
        if ($this->request->is('post')) {
            $hrmsDepartment = $this->HrmsDepartments->patchEntity($hrmsDepartment, $this->request->getData());
            if ($this->HrmsDepartments->save($hrmsDepartment)) {
                $this->Flash->success(__('The hrms department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms department could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsDepartment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Department id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsDepartment = $this->HrmsDepartments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsDepartment = $this->HrmsDepartments->patchEntity($hrmsDepartment, $this->request->getData());
            if ($this->HrmsDepartments->save($hrmsDepartment)) {
                $this->Flash->success(__('The hrms department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms department could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsDepartment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Department id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /* public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsDepartment = $this->HrmsDepartments->get($id);
        if ($this->HrmsDepartments->delete($hrmsDepartment)) {
            $this->Flash->success(__('The hrms department has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    } */

    public function checkDepartmentName($id = null)
    {
        $dataArr = [];
        if (!empty($this->request->getData('department_name'))) {
            $department_name = $this->request->getData('department_name');
            $departments = 0;
            if (!empty($id)) {
                $departments = $this->HrmsDepartments->find()->where(['department_name' => $department_name, 'NOT' => ['id' => $id]])->count();
            } else {
                $departments = $this->HrmsDepartments->find()->where(['department_name' => $department_name])->count();
            }
            if ($departments > 0) {
                $dataArr['success'] = 'true';
            } else {
                $dataArr['success'] = 'false';
            }
        }
        echo json_encode($dataArr);
        exit;
    }
}
