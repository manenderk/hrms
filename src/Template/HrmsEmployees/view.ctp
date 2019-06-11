<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmshrmsEmployee $hrmshrmsEmployee
 */
?>
<div class="row">

    <div class="col-md-12">
        <div class="page-title">VIEW hrmsEmployee
            <span class="pull-right short-ico">

                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"
                    title="Back" data-toggle="tooltip" data-placement="top">
                    <button class="btn btn-labeled btn-default" type="button">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: HIDE THIS AS PER ACL -->
                <a
                    href="<?php echo $this->Url->build(["controller" => "hrmsEmployees", "action" => "edit", $hrmsEmployee->id]); ?>">
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
                        <h4>hrmsEmployee Information</h4>
                        <ul class="skillbx-area-info-list">
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Employee Number</span>
                                <?= h($hrmsEmployee->employee_num) ?>
                            </li>  
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Job Title</span>
                                <?= $hrmsEmployee->has('hrms_job_title') ? $this->Html->link($hrmsEmployee->hrms_job_title->job_title, ['controller' => 'HrmsJobTitles', 'action' => 'view', $hrmsEmployee->hrms_job_title->id]) : '' ?>
                            </li>    
                                                           
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>First Name</span>
                                <?= h($hrmsEmployee->user->first_name) ?>
                            </li>
                                
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Middle Name</span>
                                <?= h($hrmsEmployee->user->middle_name) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Last Name</span>
                                <?= h($hrmsEmployee->user->last_name) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Email</span>
                                <?= h($hrmsEmployee->user->login_name) ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Contact Number</span>
                                <?= h($hrmsEmployee->user->contact_number) ?>
                            </li>
                                                    
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Department</span>
                                <?= $hrmsEmployee->has('hrms_department') ? $this->Html->link($hrmsEmployee->hrms_department->department_name, ['controller' => 'HrmsDepartments', 'action' => 'view', $hrmsEmployee->hrms_department->id]) : '' ?>
                            </li> 
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Reporting Manager</span>
                                <?= $hrmsEmployee->reporting_manager_id ?>
                            </li>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Duty Type</span>
                                <?= h($hrmsEmployee->duty_type) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Hire Date</span>
                                <?= h($hrmsEmployee->hire_date) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Termination Date</span>
                                <?= h($hrmsEmployee->termination_date) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Termination Reason</span>
                                <?= h($hrmsEmployee->termination_reason) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Contract Duration</span>
                                <?= h($hrmsEmployee->contract_duration) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Rate Type</span>
                                <?= h($hrmsEmployee->rate_type) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Hourly Rate</span>
                                <?= h($hrmsEmployee->hourly_rate) ?>
                            </li>
                                                        
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Pay Frequency</span>
                                <?= h($hrmsEmployee->pay_frequency) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Date of birth</span>
                                <?= h($hrmsEmployee->dob) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Maritial Status</span>
                                <?= h($hrmsEmployee->maritial_status) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Gender</span>
                                <?= h($hrmsEmployee->gender) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Home Phone</span>
                                <?= h($hrmsEmployee->home_phone) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Personal Email</span>
                                <?= h($hrmsEmployee->personal_email) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Current Address</span>
                                <?= h($hrmsEmployee->current_address_street .", ". $hrmsEmployee->current_address_city .", ". $hrmsEmployee->current_address_state. ", ". $hrmsEmployee->current_address_country) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Permanent Address</span>
                                <?= h($hrmsEmployee->permanent_address_street .", ". $hrmsEmployee->permanent_address_city .", ". $hrmsEmployee->permanent_address_state. ", ". $hrmsEmployee->permanent_address_country) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Emergency Contact 1</span>
                                <?= h($hrmsEmployee->emergency_contact_person_name_1.", ".$hrmsEmployee->emergency_contact_person_contact_1) ?>
                            </li>
                            
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Emergency Contact 2</span>
                                <?= h($hrmsEmployee->emergency_contact_person_name_2.", ".$hrmsEmployee->emergency_contact_person_contact_2) ?>
                            </li>
                            
                                                       
                            <?php foreach ($customFieldsData as $customFieldData) : ?>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span><?= __($customFieldData['name']) ?></span>
                                <?= h($customFieldData['value']) ?>
                            </li>
                            <?php endforeach; ?>
                            <li>
                                <span class="info-icon-style">
                                    <i aria-hidden="true" class="fa fa-user"></i>
                                </span>
                                <span>Status</span>
                                <?= $hrmsEmployee->is_active ? __('Active') : __('Inactive'); ?>
                            </li>

                        </ul>
                    </div>
                </div>               
            </div>
        </div>


    </div>
</div>
<?= $this->Html->css('font-awesome-animation.min.css') ?>