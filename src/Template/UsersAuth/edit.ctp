<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersAuth $usersAuth
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersAuth->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersAuth->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Auth'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersAuth form large-9 medium-8 columns content">
    <?= $this->Form->create($usersAuth) ?>
    <fieldset>
        <legend><?= __('Edit Users Auth') ?></legend>
        <?php
            echo $this->Form->control('login_name');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
