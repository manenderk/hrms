<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HrmsAssetCategories Controller
 *
 * @property \App\Model\Table\HrmsAssetCategoriesTable $HrmsAssetCategories
 *
 * @method \App\Model\Entity\HrmsAssetCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsAssetCategoriesController extends AppController
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
                $category_name = $this->request->getData('name');
            } else {
                $category_name = '';
            }
        } else {
            $category_name = '';
        }
        $this->paginate = [
            'conditions' => array(
                'category_name LIKE' => '%' . $category_name . '%'
            ),
            'order' => [
                'category_name' => 'asc'
            ]
        ];
        $hrmsAssetCategories = $this->paginate($this->HrmsAssetCategories);

        $this->set(compact('hrmsAssetCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Asset Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrmsAssetCategory = $this->HrmsAssetCategories->get($id, [
            'contain' => []
        ]);

        $this->set('hrmsAssetCategory', $hrmsAssetCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsAssetCategory = $this->HrmsAssetCategories->newEntity();
        if ($this->request->is('post')) {
            $hrmsAssetCategory = $this->HrmsAssetCategories->patchEntity($hrmsAssetCategory, $this->request->getData());
            $hrmsAssetCategory['created_by'] = $this->Auth->user('id');
            if ($this->HrmsAssetCategories->save($hrmsAssetCategory)) {
                $this->Flash->success(__('The asset category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asset category could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsAssetCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Asset Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsAssetCategory = $this->HrmsAssetCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsAssetCategory = $this->HrmsAssetCategories->patchEntity($hrmsAssetCategory, $this->request->getData());
            $hrmsAssetCategory['modified_by'] = $this->Auth->user('id');
            if ($this->HrmsAssetCategories->save($hrmsAssetCategory)) {
                $this->Flash->success(__('The hrms asset category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms asset category could not be saved. Please, try again.'));
        }
        $this->set(compact('hrmsAssetCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Asset Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /* public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsAssetCategory = $this->HrmsAssetCategories->get($id);
        if ($this->HrmsAssetCategories->delete($hrmsAssetCategory)) {
            $this->Flash->success(__('The hrms asset category has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms asset category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    } */

    public function checkCategoryName($id = null){
        $dataArr = [];
        if (!empty($this->request->getData('category_name'))) {
            $category_name = $this->request->getData('category_name');
            $categories = 0;
            if (!empty($id)) {
                $categories = $this->HrmsAssetCategories->find()->where(['category_name' => $category_name, 'NOT' => ['id' => $id]])->count();
            } else {
                $categories = $this->HrmsAssetCategories->find()->where(['category_name' => $category_name])->count();
            }
            if ($categories > 0) {
                $dataArr['success'] = 'true';
            } else {
                $dataArr['success'] = 'false';
            }
        }
        echo json_encode($dataArr);
        exit;
    }
}
