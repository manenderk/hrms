<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HrmsAssets Controller
 *
 * @property \App\Model\Table\HrmsAssetsTable $HrmsAssets
 *
 * @method \App\Model\Entity\HrmsAsset[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HrmsAssetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HrmsAssetCategories', 'Users']
        ];
        $hrmsAssets = $this->paginate($this->HrmsAssets);

        $this->set(compact('hrmsAssets'));
    }

    /**
     * View method
     *
     * @param string|null $id Hrms Asset id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrmsAsset = $this->HrmsAssets->get($id, [
            'contain' => ['HrmsAssetCategories', 'Users']
        ]);

        $this->set('hrmsAsset', $hrmsAsset);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrmsAsset = $this->HrmsAssets->newEntity();
        if ($this->request->is('post')) {
            $hrmsAsset = $this->HrmsAssets->patchEntity($hrmsAsset, $this->request->getData());
            $hrmsAsset['created_by'] = $this->Auth->user('id');
            if ($this->HrmsAssets->save($hrmsAsset)) {
                $this->Flash->success(__('The hrms asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms asset could not be saved. Please, try again.'));
        }
        $hrmsAssetCategories = $this->HrmsAssets->HrmsAssetCategories->find('list', ['limit' => 200]);
        $users = $this->HrmsAssets->Users->find('list', ['limit' => 200]);
        $this->set(compact('hrmsAsset', 'hrmsAssetCategories', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrms Asset id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrmsAsset = $this->HrmsAssets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrmsAsset = $this->HrmsAssets->patchEntity($hrmsAsset, $this->request->getData());
            $hrmsAsset['modified_by'] = $this->Auth->user('id');
            if ($this->HrmsAssets->save($hrmsAsset)) {
                $this->Flash->success(__('The hrms asset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hrms asset could not be saved. Please, try again.'));
        }
        $hrmsAssetCategories = $this->HrmsAssets->HrmsAssetCategories->find('list', ['limit' => 200]);
        $users = $this->HrmsAssets->Users->find('list', ['limit' => 200]);
        $this->set(compact('hrmsAsset', 'hrmsAssetCategories', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrms Asset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrmsAsset = $this->HrmsAssets->get($id);
        if ($this->HrmsAssets->delete($hrmsAsset)) {
            $this->Flash->success(__('The hrms asset has been deleted.'));
        } else {
            $this->Flash->error(__('The hrms asset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
