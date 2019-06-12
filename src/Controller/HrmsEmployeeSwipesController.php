<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * HrmsEmployeeSwipes Controller
 *
 * @property \App\Model\Table\HrmsEmployeeSwipesTable $HrmsEmployeeSwipes
 *
 * @method \App\Model\Entity\HrmsEmployeeSwipe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsEmployeeSwipesController extends AppController
{
    private $Employees;
    public function initialize(){
        $this->Employees = TableRegistry::getTableLocator()->get('HrmsEmployees');
        parent::initialize();
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HrmsEmployees']
        ];
        $hrmsEmployeeSwipes = $this->paginate($this->HrmsEmployeeSwipes);

        $this->set(compact('hrmsEmployeeSwipes'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Employee Swipe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /* public function view($id = null)
    {
        $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->get($id, [
            'contain' => ['HrmsEmployees']
        ]);

        $this->set('hrmsEmployeeSwipe', $hrmsEmployeeSwipe);
    } */

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->newEntity();
        if ($this->request->is('post')) {
            $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->patchEntity($hrmsEmployeeSwipe, $this->request->getData());
            if ($this->HrmsEmployeeSwipes->save($hrmsEmployeeSwipe)) {
                $this->Flash->success(__('The hrms employee swipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms employee swipe could not be saved. Please, try again.'));
        }
        $hrmsEmployees = $this->HrmsEmployeeSwipes->HrmsEmployees->find('list', ['limit' => 200]);
        $this->set(compact('hrmsEmployeeSwipe', 'hrmsEmployees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Employee Swipe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->patchEntity($hrmsEmployeeSwipe, $this->request->getData());
            if ($this->HrmsEmployeeSwipes->save($hrmsEmployeeSwipe)) {
                $this->Flash->success(__('The hrms employee swipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms employee swipe could not be saved. Please, try again.'));
        }
        $hrmsEmployees = $this->HrmsEmployeeSwipes->HrmsEmployees->find('list', ['limit' => 200]);
        $this->set(compact('hrmsEmployeeSwipe', 'hrmsEmployees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Employee Swipe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->get($id);
        if ($this->HrmsEmployeeSwipes->delete($hrmsEmployeeSwipe)) {
            $this->Flash->success(__('The hrms employee swipe has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms employee swipe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    

    public function swipe(){
        $employeeId = '';
        $employees = $this->Employees->find('all')->select(['id'])->where(['user_id' => $this->Auth->user('id')]);
        foreach ($employees as $employee) {
            $employeeId = $employee->id;
        }

        if($this->request->is(['post', 'ajax'])){
            $data = [];
            if($this->request->getData('action') == 'Swipe In' || $this->request->getData('action') == 'Swipe Out'){
                
                $hrmsEmployeeSwipe = $this->HrmsEmployeeSwipes->newEntity();
                $hrmsEmployeeSwipe['employee_id'] = $employeeId;
                $hrmsEmployeeSwipe['swipe_time'] = date('Y-m-d h:m:s');
                
                if ($this->request->getData('action') == 'Swipe In') {
                    $hrmsEmployeeSwipe['swipe_action'] = 1;
                }
                else {
                    $hrmsEmployeeSwipe['swipe_action'] = 0;
                }                    

                $hrmsEmployeeSwipe['created_by'] = $this->Auth->user('id');
                
                if ($this->HrmsEmployeeSwipes->save($hrmsEmployeeSwipe)) {
                    $this->Flash->success(__('Swipe added.'));
                    return $this->redirect(['controller' => 'dashboard']);

                } else {
                    $this->Flash->error(__('Swipe could not be added.'));

                }
            }
        }

        $swipeAction = '';
        $swipes = $this->HrmsEmployeeSwipes->find('all')->where(['employee_id' => $employeeId])->order(['swipe_time' => 'desc'])->limit(1);
        foreach ($swipes as $swipe) {
            if($swipe->swipe_action == 1){
                $swipeAction = 'Swipe Out';
            }
            else{
                $swipeAction = 'Swipe In';
            }
        }
        if(empty($swipeAction)){
            $swipeAction = 'Swipe In';
        }

        if($this->request->is(['post', 'ajax'])){
             
        }
        $this->set(compact('swipeAction'));
    }
}
