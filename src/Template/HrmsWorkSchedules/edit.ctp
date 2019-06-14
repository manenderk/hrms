<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsWorkSchedule $hrmsWorkSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hrmsWorkSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsWorkSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hrms Work Schedules'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hrmsWorkSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($hrmsWorkSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Hrms Work Schedule') ?></legend>
        <?php
            echo $this->Form->control('schedule_name');
            echo $this->Form->control('monday');
            echo $this->Form->control('tuesday');
            echo $this->Form->control('wednesday');
            echo $this->Form->control('thursday');
            echo $this->Form->control('friday');
            echo $this->Form->control('saturday');
            echo $this->Form->control('sunday');
            echo $this->Form->control('monday_shift_start');
            echo $this->Form->control('tuesday_shift_start');
            echo $this->Form->control('wednesday_shift_start');
            echo $this->Form->control('thursday_shift_start');
            echo $this->Form->control('friday_shift_start');
            echo $this->Form->control('saturday_shift_start');
            echo $this->Form->control('sunday_shift_start');
            echo $this->Form->control('monday_shift_end');
            echo $this->Form->control('tuesday_shift_end');
            echo $this->Form->control('wednesday_shift_end');
            echo $this->Form->control('thursday_shift_end');
            echo $this->Form->control('friday_shift_end');
            echo $this->Form->control('saturday_shift_end');
            echo $this->Form->control('sunday_shift_end');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modifed_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
