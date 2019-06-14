<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeeType[]|\Cake\Collection\CollectionInterface $employeeTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees Details'), ['controller' => 'EmployeesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employees Detail'), ['controller' => 'EmployeesDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeeTypes index large-9 medium-8 columns content">
    <h3><?= __('Employee Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeeTypes as $employeeType): ?>
            <tr>
                <td><?= $this->Number->format($employeeType->id) ?></td>
                <td><?= h($employeeType->type) ?></td>
                <td><?= h($employeeType->created) ?></td>
                <td><?= h($employeeType->modified) ?></td>
                <td><?= $this->Number->format($employeeType->created_by) ?></td>
                <td><?= $this->Number->format($employeeType->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeeType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeType->id)]) ?>
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
