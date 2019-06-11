<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Name') ?></th>
            <td><?= h($user->login_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($user->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Number') ?></th>
            <td><?= h($user->contact_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Country Code') ?></th>
            <td><?= h($user->mobile_country_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Word Country Code') ?></th>
            <td><?= h($user->word_country_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Contact Number') ?></th>
            <td><?= h($user->work_contact_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Country Code') ?></th>
            <td><?= h($user->home_country_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Contact Number') ?></th>
            <td><?= h($user->home_contact_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Pic') ?></th>
            <td><?= h($user->profile_pic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= h($user->is_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Login') ?></th>
            <td><?= h($user->last_login) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Signature') ?></h4>
        <?= $this->Text->autoParagraph(h($user->signature)); ?>
    </div>
</div>
