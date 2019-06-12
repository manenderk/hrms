<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;


/**
 * UsersAuth Controller
 *
 * @property \App\Model\Table\UsersAuthTable $UsersAuth
 *
 * @method \App\Model\Entity\UsersAuth[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersAuthController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['add']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $usersAuth = $this->paginate($this->UsersAuth);

        $this->set(compact('usersAuth'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Auth id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersAuth = $this->UsersAuth->get($id, [
            'contain' => []
        ]);

        $this->set('usersAuth', $usersAuth);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersAuth = $this->UsersAuth->newEntity();
        if ($this->request->is('post')) {
            $usersAuth = $this->UsersAuth->patchEntity($usersAuth, $this->request->getData());
            if ($this->UsersAuth->save($usersAuth)) {
                $this->Flash->success(__('The users auth has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users auth could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAuth'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Auth id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersAuth = $this->UsersAuth->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersAuth = $this->UsersAuth->patchEntity($usersAuth, $this->request->getData());
            if ($this->UsersAuth->save($usersAuth)) {
                $this->Flash->success(__('The users auth has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users auth could not be saved. Please, try again.'));
        }
        $this->set(compact('usersAuth'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Auth id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersAuth = $this->UsersAuth->get($id);
        if ($this->UsersAuth->delete($usersAuth)) {
            $this->Flash->success(__('The users auth has been deleted.'));
        } else {
            $this->Flash->error(__('The users auth could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {            
            $user = $this->Auth->identify();
            //if ($user['is_active'] == 0) {
            if(false){                
                $this->Auth->logout();
                $dataJson['msg'] = 'You are not authorized to access ATS.';
                $dataJson['success'] = false;
                echo json_encode($dataJson);
                exit;
            }
            if ($user) {
                //$this->Users->updateAll(['last_login' => Time::now()], ['id' => $user['id']]);
                $this->Auth->setUser($user);
                //Update last login time stamp
                /* $UsersTable = TableRegistry::get('Users');
                $users = $UsersTable->get($user['id']);
                $users->last_login = date('Y-m-d h:m:s');
                $UsersTable->save($users); */
                $dataJson['success'] = true;
                /* if ($user['user_role_id'] == 6) {
                    $dataJson['url'] = "../job_requirements/add";
                } elseif ($user['user_role_id'] == 2) {
                    $dataJson['url'] = "../job_requirements/today_requirements";
                } elseif ($user['user_role_id'] == 1 || $user['user_role_id'] == 8) {
                    $dataJson['url'] = "../dashboard/view_admin";
                } else {
                    $dataJson['url'] = "../job_requirements";
                } */
                $dataJson['url'] = Router::url(['controller' => 'dashboard']);
                //$dataJson['url'] = $this->request->getData('redirect');
                $dataJson['msg'] = "Authentication Successful!  Redirecting...";
                echo json_encode($dataJson);
                exit;
            //return $this->redirect($this->Auth->redirectUrl());
            } else {
                $dataJson['msg'] = 'Invalid Username/Password.';
                $dataJson['success'] = false;
                echo json_encode($dataJson);
                exit;
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout()
    {
        $this->layout = 'logout';
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
}
