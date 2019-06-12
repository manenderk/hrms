<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsEmployeeSwipe $hrmsEmployeeSwipe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hrms Employee Swipe'), ['action' => 'edit', $hrmsEmployeeSwipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hrms Employee Swipe'), ['action' => 'delete', $hrmsEmployeeSwipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsEmployeeSwipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hrms Employee Swipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrms Employee Swipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hrms Employees'), ['controller' => 'HrmsEmployees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrms Employee'), ['controller' => 'HrmsEmployees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hrmsEmployeeSwipes view large-9 medium-8 columns content">
    <h3><?= h($hrmsEmployeeSwipe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hrms Employee') ?></th>
            <td><?= $hrmsEmployeeSwipe->has('hrms_employee') ? $this->Html->link($hrmsEmployeeSwipe->hrms_employee->employee_num, ['controller' => 'HrmsEmployees', 'action' => 'view', $hrmsEmployeeSwipe->hrms_employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hrmsEmployeeSwipe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Swipe Action') ?></th>
            <td><?= $this->Number->format($hrmsEmployeeSwipe->swipe_action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($hrmsEmployeeSwipe->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($hrmsEmployeeSwipe->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Swipe Time') ?></th>
            <td><?= h($hrmsEmployeeSwipe->swipe_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hrmsEmployeeSwipe->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hrmsEmployeeSwipe->modified) ?></td>
        </tr>
    </table>
</div>
