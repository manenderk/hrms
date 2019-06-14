<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeType $employeeType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employee Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees Details'), ['controller' => 'EmployeesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employees Detail'), ['controller' => 'EmployeesDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeeTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($employeeType) ?>
    <fieldset>
        <legend><?= __('Add Employee Type') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
