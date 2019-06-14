<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule[]|\Cake\Collection\CollectionInterface $hrmsWorkSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hrms Work Schedule'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrmsWorkSchedules index large-9 medium-8 columns content">
    <h3><?= __('Hrms Work Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_shift_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tuesday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wednesday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thursday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('friday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saturday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sunday_shift_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modifed_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hrmsWorkSchedules as $hrmsWorkSchedule): ?>
            <tr>
                <td><?= $this->Number->format($hrmsWorkSchedule->id) ?></td>
                <td><?= h($hrmsWorkSchedule->schedule_name) ?></td>
                <td><?= h($hrmsWorkSchedule->monday) ?></td>
                <td><?= h($hrmsWorkSchedule->tuesday) ?></td>
                <td><?= h($hrmsWorkSchedule->wednesday) ?></td>
                <td><?= h($hrmsWorkSchedule->thursday) ?></td>
                <td><?= h($hrmsWorkSchedule->friday) ?></td>
                <td><?= h($hrmsWorkSchedule->saturday) ?></td>
                <td><?= h($hrmsWorkSchedule->sunday) ?></td>
                <td><?= h($hrmsWorkSchedule->monday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->tuesday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->wednesday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->thursday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->friday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->saturday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->sunday_shift_start) ?></td>
                <td><?= h($hrmsWorkSchedule->monday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->tuesday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->wednesday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->thursday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->friday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->saturday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->sunday_shift_end) ?></td>
                <td><?= h($hrmsWorkSchedule->created) ?></td>
                <td><?= h($hrmsWorkSchedule->modified) ?></td>
                <td><?= $this->Number->format($hrmsWorkSchedule->created_by) ?></td>
                <td><?= $this->Number->format($hrmsWorkSchedule->modifed_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hrmsWorkSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hrmsWorkSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hrmsWorkSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsWorkSchedule->id)]) ?>
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
