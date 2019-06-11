<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HrmsAsset $hrmsAsset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hrms Asset'), ['action' => 'edit', $hrmsAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hrms Asset'), ['action' => 'delete', $hrmsAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrmsAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hrms Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrms Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hrms Asset Categories'), ['controller' => 'HrmsAssetCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrms Asset Category'), ['controller' => 'HrmsAssetCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hrmsAssets view large-9 medium-8 columns content">
    <h3><?= h($hrmsAsset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hrmsAsset->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrms Asset Category') ?></th>
            <td><?= $hrmsAsset->has('hrms_asset_category') ? $this->Html->link($hrmsAsset->hrms_asset_category->category_name, ['controller' => 'HrmsAssetCategories', 'action' => 'view', $hrmsAsset->hrms_asset_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial Number') ?></th>
            <td><?= h($hrmsAsset->serial_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Number') ?></th>
            <td><?= h($hrmsAsset->tag_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $hrmsAsset->has('user') ? $this->Html->link($hrmsAsset->user->login_name, ['controller' => 'Users', 'action' => 'view', $hrmsAsset->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hrmsAsset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($hrmsAsset->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($hrmsAsset->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hrmsAsset->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hrmsAsset->modified) ?></td>
        </tr>
    </table>
</div>
