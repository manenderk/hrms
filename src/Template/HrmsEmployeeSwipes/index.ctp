<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsEmployeeSwipe[]|\Cake\Collection\CollectionInterface $hrmsEmployeeSwipes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hrms Employee Swipe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hrms Employees'), ['controller' => 'HrmsEmployees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrms Employee'), ['controller' => 'HrmsEmployees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrmsEmployeeSwipes index large-9 medium-8 columns content">
    <h3><?= __('Hrms Employee Swipes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('swipe_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('swipe_action') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hrmsEmployeeSwipes as $hrmsEmployeeSwipe): ?>
            <tr>
                <td><?= $this->Number->format($hrmsEmployeeSwipe->id) ?></td>
                <td><?= $hrmsEmployeeSwipe->has('hrms_employee') ? $this->Html->link($hrmsEmployeeSwipe->hrms_employee->employee_num, ['controller' => 'HrmsEmployees', 'action' => 'view', $hrmsEmployeeSwipe->hrms_employee->id]) : '' ?></td>
                <td><?= h($hrmsEmployeeSwipe->swipe_time) ?></td>
                <td><?= $this->Number->format($hrmsEmployeeSwipe->swipe_action) ?></td>
                <td><?= h($hrmsEmployeeSwipe->created) ?></td>
                <td><?= h($hrmsEmployeeSwipe->modified) ?></td>
                <td><?= $this->Number->format($hrmsEmployeeSwipe->created_by) ?></td>
                <td><?= $this->Number->format($hrmsEmployeeSwipe->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hrmsEmployeeSwipe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hrmsEmployeeSwipe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hrmsEmployeeSwipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsEmployeeSwipe->id)]) ?>
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
