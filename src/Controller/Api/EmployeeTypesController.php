<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class EmployeeTypesController extends AppController{

    public function index(){
        $employeeTypes = $this->EmployeeTypes->find('all');
        $this->set([
            'employee_types' => $employeeTypes,
            '_serialize' => [
                'employee_types'
            ]
        ]);

    }
}