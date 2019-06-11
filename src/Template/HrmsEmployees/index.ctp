<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsEmployee[]|\Cake\Collection\CollectionInterface $hrmsEmployees
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hrms Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hrms Job Titles'), ['controller' => 'HrmsJobTitles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrms Job Title'), ['controller' => 'HrmsJobTitles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hrms Departments'), ['controller' => 'HrmsDepartments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrms Department'), ['controller' => 'HrmsDepartments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrmsEmployees index large-9 medium-8 columns content">
    <h3><?= __('Hrms Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reporting_manager_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_title_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duty_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hire_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('termination_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rate_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hourly_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_frequency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maritial_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('personal_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_address_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_address_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_address_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_address_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permanent_address_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permanent_address_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permanent_address_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permanent_address_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emergency_contact_person_name_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emergency_contact_person_contact_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emergency_contact_person_name_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emergency_contact_person_contact_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hrmsEmployees as $hrmsEmployee): ?>
            <tr>
                <td><?= $this->Number->format($hrmsEmployee->id) ?></td>
                <td><?= $this->Number->format($hrmsEmployee->user_id) ?></td>
                <td><?= h($hrmsEmployee->employee_num) ?></td>
                <td><?= $this->Number->format($hrmsEmployee->reporting_manager_id) ?></td>
                <td><?= $hrmsEmployee->has('hrms_job_title') ? $this->Html->link($hrmsEmployee->hrms_job_title->id, ['controller' => 'HrmsJobTitles', 'action' => 'view', $hrmsEmployee->hrms_job_title->id]) : '' ?></td>
                <td><?= $hrmsEmployee->has('hrms_department') ? $this->Html->link($hrmsEmployee->hrms_department->department_name, ['controller' => 'HrmsDepartments', 'action' => 'view', $hrmsEmployee->hrms_department->id]) : '' ?></td>
                <td><?= h($hrmsEmployee->duty_type) ?></td>
                <td><?= h($hrmsEmployee->hire_date) ?></td>
                <td><?= h($hrmsEmployee->termination_date) ?></td>
                <td><?= h($hrmsEmployee->contract_duration) ?></td>
                <td><?= h($hrmsEmployee->rate_type) ?></td>
                <td><?= h($hrmsEmployee->hourly_rate) ?></td>
                <td><?= h($hrmsEmployee->pay_frequency) ?></td>
                <td><?= h($hrmsEmployee->dob) ?></td>
                <td><?= h($hrmsEmployee->maritial_status) ?></td>
                <td><?= h($hrmsEmployee->gender) ?></td>
                <td><?= h($hrmsEmployee->home_phone) ?></td>
                <td><?= h($hrmsEmployee->personal_email) ?></td>
                <td><?= h($hrmsEmployee->current_address_street) ?></td>
                <td><?= h($hrmsEmployee->current_address_city) ?></td>
                <td><?= h($hrmsEmployee->current_address_state) ?></td>
                <td><?= h($hrmsEmployee->current_address_country) ?></td>
                <td><?= h($hrmsEmployee->permanent_address_street) ?></td>
                <td><?= h($hrmsEmployee->permanent_address_city) ?></td>
                <td><?= h($hrmsEmployee->permanent_address_state) ?></td>
                <td><?= h($hrmsEmployee->permanent_address_country) ?></td>
                <td><?= h($hrmsEmployee->emergency_contact_person_name_1) ?></td>
                <td><?= h($hrmsEmployee->emergency_contact_person_contact_1) ?></td>
                <td><?= h($hrmsEmployee->emergency_contact_person_name_2) ?></td>
                <td><?= h($hrmsEmployee->emergency_contact_person_contact_2) ?></td>
                <td><?= h($hrmsEmployee->is_active) ?></td>
                <td><?= h($hrmsEmployee->created) ?></td>
                <td><?= h($hrmsEmployee->modified) ?></td>
                <td><?= $this->Number->format($hrmsEmployee->created_by) ?></td>
                <td><?= $this->Number->format($hrmsEmployee->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hrmsEmployee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hrmsEmployee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hrmsEmployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsEmployee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
 -->

 <div class="row">
    <div class="col-md-12">
        <div class="page-title"> EMPLOYEES
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-hand-o-left"></i>
                        </span>Back</button>
                </a>
                <!-- TODO: ACL - SHOW ONLY WHEN USER HAS WRITE ACCESS -->
                <a
                    href="<?php echo $this->Url->build(["controller" => "employees", "action" => "add"]); ?>">
                    <button type="button" class="btn btn-labeled btn-default">
                        <span class="btn-label"><i class="fa fa-plus"></i>
                        </span>Add</button>
                </a>
            </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel-body user-seabx">
        <?php echo $this->Form->create('Employees', ['role'=>'form','class'=>'form-inline', 'url' => ['action' =>'index']]); ?>
        <div class="col-lg-5 col-md-5 text-center col-xs-12 col-sm-5">
            <?php echo $this->Form->control('name', ['label'=>false,'placeholder'=>'Employee Name','class'=>'form-control atsborder input-sm','default'=>@$_POST['name']]); ?>
        </div>
        <div class="col-lg-3 col-md-3 text-center col-xs-12 col-sm-3">
            <?php echo $this->Form->control('email', ['label'=>false,'placeholder'=>'Email','class'=>'form-control atsborder input-sm','default'=>@$_POST['email']]); ?>
        </div>
        <div class="col-lg-3 text-center col-md-3 col-xs-12 col-sm-3">
            <?php echo $this->Form->control('employee_num', ['label'=>false,'placeholder'=>'Employee Number','class'=>'form-control atsborder input-sm','default'=>@$_POST['employee_num']]); ?>
        </div>
        <div class="col-lg-1 text-center col-xs-12 col-md-1 col-sm-1">
            <button class="mb-sm btn btn-success" type="submit" title="Click here to serach" data-toggle="tooltip"
                data-placement="bottom">
                Search
            </button>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<div class="panel panel-default">
    <div class="table-responsive">
        <table id="employees" class="table table-bordered table-hover">
            <thead class="bg-gray">
                <tr>
                    <th><?= $this->Paginator->sort('employee_num') ?>
                    </th>
                    <th><?= $this->Paginator->sort('email') ?>
                    </th>
                    <th><?= $this->Paginator->sort('job_title_id') ?>
                    </th>
                    <th><?= $this->Paginator->sort('department_id') ?>
                    </th>
                    <th><?= $this->Paginator->sort('is_active') ?>
                    </th>
                    <!-- TODO: HIDE THIS AS PER ACL -->
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody id="newrow1">
                <?php foreach ($hrmsEmployees as $hrmsEmployee) : ?>
                <tr class="bg-gray-lighter">
                    <td>
                        <?= $hrmsEmployee->has('user') ? $this->Html->link($hrmsEmployee->user->login_name, ['controller' => 'HrmsEmployees', 'action' => 'view', $hrmsEmployee->id]) : ''; ?>
                    </td>
                    <td>
                        <?= $hrmsEmployee->employee_num ?>
                    </td>
                    <td><?= $hrmsEmployee->has('hrms_job_title') ? $this->Html->link($hrmsEmployee->hrms_job_title->job_title, ['controller' => 'HrmsJobTitles', 'action' => 'view', $hrmsEmployee->hrms_job_title->id]) : '' ?>
                    </td>
                    <td><?= $hrmsEmployee->has('hrms_department') ? $this->Html->link($hrmsEmployee->hrms_department->department_name, ['controller' => 'HrmsDepartments', 'action' => 'view', $hrmsEmployee->hrms_department->id]) : '' ?>
                    </td>
                    <td><?= $hrmsEmployee->is_active == 1 ? 'Yes' : 'No' ?>
                    </td>
                    <!-- TODO: HIDE THIS AS PER ACL  -->
                    <td>
                        <a
                            href="<?php echo $this->Url->build(["controller" => "HrmsEmployees", "action" => "edit",$hrmsEmployee->id]); ?>">
                            <em class="fa fa-pencil-square-o pull-right faa-tada"
                                title="Click to edit this Employee" data-toggle="tooltip"
                                data-placement="left"></em>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- END table-responsive-->

</div>
<div class="paginator">
    <ul class="pagination">
        <?php echo $this->Paginator->next('Show more Employees...'); ?>
    </ul>
</div>
<script>
    // For unlimited scrolling by user
    $(function() {
        var $container = $('#employees');
        $container.infinitescroll({
            navSelector: '.next', // selector for the paged navigation 
            nextSelector: '.next a', // selector for the NEXT link (to page 2)
            itemSelector: '#newrow1', // selector for all items you'll retrieve
            debug: true,
            dataType: 'html',
            loading: {
                finishedMsg: 'No more Employees',
                img: 'img/spinner.gif'
            }
        });
    });
</script>