<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class EmployeesDetailsController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index(){
        $employees = $this->EmployeesDetails->find('all');
        $this->set([
            'employees' => $employees,
            '_serialize' => [
                'employees'
            ]
        ]);
    }

    public function add(){
        $response = [];
        if($this->request->is('post')){
            $employeesDetail = $this->EmployeesDetails->newEntity();
            $employeesDetail = $this->EmployeesDetails->patchEntity($employeesDetail, $this->request->getData());
            $employeesDetail['created_by'] = 1;
            $employeesDetail['modified_by'] = 1;
            if ($this->EmployeesDetails->save($employeesDetail)) {
                $response['status'] = 'success';
                $response['message'] = 'employee saved';
            }
            else{
                $response['status'] = 'error';
                $response['message'] = $employeesDetail->getErrors();
            }
        }
        $this->set([
            'response' => $response,
            '_serialize' => [
                'response'
            ]
        ]);
    }

    public function edit($id = null){
        $response = [];
        if ($this->request->is(['post','put'])) {
            $employeesDetail = $this->EmployeesDetails->get($id);
            $employeesDetail = $this->EmployeesDetails->patchEntity($employeesDetail, $this->request->getData());
            $employeesDetail['created_by'] = 1;
            $employeesDetail['modified_by'] = 1;
            if ($this->EmployeesDetails->save($employeesDetail)) {
                $response['status'] = 'success';
                $response['message'] = 'employee saved';
            } else {
                $response['status'] = 'error';
                $response['message'] = $employeesDetail->getErrors();
            }
        }
        $this->set([
            'response' => $response,
            '_serialize' => [
                'response'
            ]
        ]);

    }


    public function view($id = null){
        if($id !== null){
            $employee = $this->EmployeesDetails->get($id);
            $this->set([
                'employee' => $employee,
                '_serialize' => [
                    'employee'
                ]
            ]);
        }
    }
}
