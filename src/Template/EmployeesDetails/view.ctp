<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDetail $employeesDetail
 */
?>
<div class="row">

    <div class="col-md-12">
        <div class="page-title">VIEW Employee Details
            <span class="pull-right short-ico">

                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"
                    title="Back" data-toggle="tooltip" data-placement="top">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a
                    href="<?php echo $this->Url->build(["controller" => "employeesDetails", "action" => "edit", $employeesDetail->id]); ?>">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-pencil-square-o"></i>
                        </span>Edit</button>
                </a>
            </span>
        </div>
    </div>

</div>

<?php ?>
<div class="row">
           
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-9">
                    
                    <div class="skillbx-area">
                        <h4>Employee Information</h4>
                        <ul class="skillbx-area-info-list">
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Last Name</span>
                                <?= h($employeesDetail->last_name) ?>
                            </li>  
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>First Name</span>
                                <?= $employeesDetail->first_name ?>
                            </li>    
                                                           
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Middle Name</span>
                                <?= h($employeesDetail->middle_name) ?>
                            </li>
                                
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Email</span>
                                <?= h($employeesDetail->email) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Present Address</span>
                                <?= $employeesDetail->present_address .", ". $employeesDetail->city->city_name .", ". $employeesDetail->state->name .", ". $employeesDetail->country->name .", ". $employeesDetail->zipcode  ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Home Phone</span>
                                <?= h($employeesDetail->home_phone_code . "-" . $employeesDetail->home_phone) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Cell Phone</span>
                                <?= h($employeesDetail->cell_phone_code . "-" . $employeesDetail->cell_phone) ?>
                            </li>
                                                    
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Date of birth</span>
                                <?= $employeesDetail->date_of_birth ?>
                            </li> 
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Social security number</span>
                                <?= $employeesDetail->social_security_number ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Emergency Contact Name</span>
                                <?= h($employeesDetail->emergency_contact_name) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Emergency Contact Relationship</span>
                                <?= h($employeesDetail->emergency_contact_relationship) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Emergency contact phone number</span>
                                <?= h($employeesDetail->emergency_contact_phone_code ."-". $employeesDetail->emergency_contact_phone) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Employee Id</span>
                                <?= h($employeesDetail->employee_id) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Position</span>
                                <?= h($employeesDetail->position) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Department</span>
                                <?= h($employeesDetail->department) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Manager Name</span>
                                <?= h($employeesDetail->manager_name) ?>
                            </li>
                                                        
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Team Lead Name</span>
                                <?= h($employeesDetail->team_lead_name) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Work location number</span>
                                <?= h($employeesDetail->work_location_number) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Office location</span>
                                <?= h($employeesDetail->office_location) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Department Number</span>
                                <?= h($employeesDetail->department_number) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Time keeper</span>
                                <?= h($employeesDetail->time_keeper) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>W-4 Documentation complete</span>
                                <?= ($employeesDetail->w_4_documentation_complete) ? 'Yes' : "No" ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>i-9 Documentation complete</span>
                                <?= $employeesDetail->i_9_documentation_complete  ? 'Yes' : 'No' ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Employee Type</span>
                                <?= $employeesDetail->employee_type->type ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Required to travel</span>
                                <?= $employeesDetail->required_to_travel ? 'Yes' : 'No' ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>EMR Program</span>
                                <?= h($employeesDetail->emr_program) ?>
                            </li>

                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Start Date</span>
                                <?= h($employeesDetail->start_date) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>End Date</span>
                                <?= h($employeesDetail->end_date) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Evaluation</span>
                                <?= h($employeesDetail->evaluation) ?>
                            </li>
                            
                                                       
                        </ul>
                    </div>
                </div>               
            </div>
        </div>


    </div>
</div>
<?= $this->Html->css('font-awesome-animation.min.css') ?>