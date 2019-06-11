<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsAsset $hrmsAsset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hrms Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hrms Asset Categories'), ['controller' => 'HrmsAssetCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrms Asset Category'), ['controller' => 'HrmsAssetCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrmsAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($hrmsAsset) ?>
    <fieldset>
        <legend><?= __('Add Hrms Asset') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('asset_category_id', ['options' => $hrmsAssetCategories]);
            echo $this->Form->control('serial_number');
            echo $this->Form->control('tag_number');
            echo $this->Form->control('allocated_to_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
