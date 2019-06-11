<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HrmsJobTitles Controller
 *
 * @property \App\Model\Table\HrmsJobTitlesTable $HrmsJobTitles
 *
 * @method \App\Model\Entity\HrmsJobTitle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsJobTitlesController extends AppController
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
                $job_title = $this->request->getData('name');
                $limit = 1000;
            } else {
                $job_title = '';
                $limit = 10;
            }
        } else {
            $job_title = '';
            $limit = 10;
        }
        $this->paginate = [
            'conditions' => array(
                'job_title LIKE' => '%' . $job_title . '%'
            ),
            'limit' => $limit,
            'order' => [
                'job_title' => 'asc'
            ]
        ];

        $hrmsJobTitles = $this->paginate($this->HrmsJobTitles);

        $this->set(compact('hrmsJobTitles'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Job Title id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrmsJobTitle = $this->HrmsJobTitles->get($id, [
            'contain' => []
        ]);

        $this->set('hrmsJobTitle', $hrmsJobTitle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsJobTitle = $this->HrmsJobTitles->newEntity();
        if ($this->request->is('post')) {
            $hrmsJobTitle = $this->HrmsJobTitles->patchEntity($hrmsJobTitle, $this->request->getData());
            if ($this->HrmsJobTitles->save($hrmsJobTitle)) {
                $this->Flash->success(__('The hrms job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms job title could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsJobTitle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Job Title id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsJobTitle = $this->HrmsJobTitles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsJobTitle = $this->HrmsJobTitles->patchEntity($hrmsJobTitle, $this->request->getData());
            if ($this->HrmsJobTitles->save($hrmsJobTitle)) {
                $this->Flash->success(__('The hrms job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms job title could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsJobTitle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Job Title id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /* public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsJobTitle = $this->HrmsJobTitles->get($id);
        if ($this->HrmsJobTitles->delete($hrmsJobTitle)) {
            $this->Flash->success(__('The hrms job title has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms job title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    } */

    public function checkJobTitle($id = null)
    {
        $dataArr = [];
        if (!empty($this->request->getData('job_title'))) {
            $job_title = $this->request->getData('job_title');
            $jobTitles = 0;
            if (!empty($id)) {
                $jobTitles = $this->HrmsJobTitles->find()->where(['job_title' => $job_title, 'NOT' => ['id' => $id]])->count();
            } else {
                $jobTitles = $this->HrmsJobTitles->find()->where(['job_title' => $job_title])->count();
            }
            if ($jobTitles > 0) {
                $dataArr['success'] = 'true';
            } else {
                $dataArr['success'] = 'false';
            }
        }
        echo json_encode($dataArr);
        exit;
    }
}
