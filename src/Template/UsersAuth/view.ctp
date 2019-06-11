<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersAuth $usersAuth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Auth'), ['action' => 'edit', $usersAuth->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Auth'), ['action' => 'delete', $usersAuth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersAuth->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Auth'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Auth'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersAuth view large-9 medium-8 columns content">
    <h3><?= h($usersAuth->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login Name') ?></th>
            <td><?= h($usersAuth->login_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usersAuth->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersAuth->id) ?></td>
        </tr>
    </table>
</div>
