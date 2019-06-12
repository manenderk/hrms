<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsEmployeeSwipe $hrmsEmployeeSwipe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hrms Employee Swipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hrms Employees'), ['controller' => 'HrmsEmployees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrms Employee'), ['controller' => 'HrmsEmployees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrmsEmployeeSwipes form large-9 medium-8 columns content">
    <?= $this->Form->create($hrmsEmployeeSwipe) ?>
    <fieldset>
        <legend><?= __('Add Hrms Employee Swipe') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $hrmsEmployees]);
            echo $this->Form->control('swipe_time');
            echo $this->Form->control('swipe_action');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
