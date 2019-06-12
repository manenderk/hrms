<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HrmsWorkSchedules Controller
 *
 * @property \App\Model\Table\HrmsWorkSchedulesTable $HrmsWorkSchedules
 *
 * @method \App\Model\Entity\HrmsWorkSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsWorkSchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hrmsWorkSchedules = $this->paginate($this->HrmsWorkSchedules);

        $this->set(compact('hrmsWorkSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Work Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrmsWorkSchedule = $this->HrmsWorkSchedules->get($id, [
            'contain' => []
        ]);

        $this->set('hrmsWorkSchedule', $hrmsWorkSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsWorkSchedule = $this->HrmsWorkSchedules->newEntity();
        if ($this->request->is('post')) {
            $hrmsWorkSchedule = $this->HrmsWorkSchedules->patchEntity($hrmsWorkSchedule, $this->request->getData());
            $hrmsWorkSchedule['created_by'] = $this->Auth->user('id');
            if ($this->HrmsWorkSchedules->save($hrmsWorkSchedule)) {
                $this->Flash->success(__('The hrms work schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms work schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsWorkSchedule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Work Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsWorkSchedule = $this->HrmsWorkSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsWorkSchedule = $this->HrmsWorkSchedules->patchEntity($hrmsWorkSchedule, $this->request->getData());
            $hrmsWorkSchedule['modifed_by'] = $this->Auth->user('id');
            if ($this->HrmsWorkSchedules->save($hrmsWorkSchedule)) {
                $this->Flash->success(__('The hrms work schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms work schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsWorkSchedule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Work Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsWorkSchedule = $this->HrmsWorkSchedules->get($id);
        if ($this->HrmsWorkSchedules->delete($hrmsWorkSchedule)) {
            $this->Flash->success(__('The hrms work schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms work schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
