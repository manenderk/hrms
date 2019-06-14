<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule $hrmsWorkSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hrms Work Schedule'), ['action' => 'edit', $hrmsWorkSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hrms Work Schedule'), ['action' => 'delete', $hrmsWorkSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsWorkSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hrms Work Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrms Work Schedule'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hrmsWorkSchedules view large-9 medium-8 columns content">
    <h3><?= h($hrmsWorkSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Schedule Name') ?></th>
            <td><?= h($hrmsWorkSchedule->schedule_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->monday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->tuesday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->wednesday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->thursday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->friday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->saturday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Shift Start') ?></th>
            <td><?= h($hrmsWorkSchedule->sunday_shift_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->monday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->tuesday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->wednesday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->thursday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->friday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->saturday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday Shift End') ?></th>
            <td><?= h($hrmsWorkSchedule->sunday_shift_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hrmsWorkSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($hrmsWorkSchedule->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modifed By') ?></th>
            <td><?= $this->Number->format($hrmsWorkSchedule->modifed_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hrmsWorkSchedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hrmsWorkSchedule->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monday') ?></th>
            <td><?= $hrmsWorkSchedule->monday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tuesday') ?></th>
            <td><?= $hrmsWorkSchedule->tuesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wednesday') ?></th>
            <td><?= $hrmsWorkSchedule->wednesday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thursday') ?></th>
            <td><?= $hrmsWorkSchedule->thursday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Friday') ?></th>
            <td><?= $hrmsWorkSchedule->friday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saturday') ?></th>
            <td><?= $hrmsWorkSchedule->saturday ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sunday') ?></th>
            <td><?= $hrmsWorkSchedule->sunday ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
