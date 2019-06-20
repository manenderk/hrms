<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDetail[]|\Cake\Collection\CollectionInterface $employeesDetails
 */
?>


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
                    href="<?php echo $this->Url->build(["controller" => "employees-details", "action" => "add"]); ?>">
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
            <?php echo $this->Form->control('employee_id', ['label'=>false,'placeholder'=>'Employee Id','class'=>'form-control atsborder input-sm','default'=>@$_POST['employee_num']]); ?>
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
                    <th><?= $this->Paginator->sort('employee_id', 'Employee ID') ?>
                    </th>
                    <th><?= $this->Paginator->sort('email') ?>
                    </th>
                    <th><?= $this->Paginator->sort('department') ?>
                    </th>
                    <th><?= $this->Paginator->sort('manager_name') ?>
                    </th>
                    
                    <!-- TODO: HIDE THIS AS PER ACL -->
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody id="newrow1">
                <?php foreach ($employeesDetails as $employeesDetail) : ?>
                <tr class="bg-gray-lighter">
                    <td>
                        <?= $this->Html->link(h($employeesDetail->employee_id), ['action' => 'view', $employeesDetail->id] ) ?>
                    </td>
                    <td>
                        <?= $employeesDetail->email ?>
                    </td>
                    <td>
                        <?= $employeesDetail->department ?>
                    </td>
                    <td>
                        <?= $employeesDetail->manager_name ?>
                    </td>
                    
                    <!-- TODO: HIDE THIS AS PER ACL  -->
                    <td>
                        <a
                            href="<?php echo $this->Url->build(["action" => "edit",$employeesDetail->id]); ?>">
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
