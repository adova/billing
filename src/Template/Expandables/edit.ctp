<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expandable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expandable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Expandables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informations'), ['controller' => 'Informations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Information'), ['controller' => 'Informations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expandables form large-9 medium-8 columns content">
    <?= $this->Form->create($expandable) ?>
    <fieldset>
        <legend><?= __('Edit Expandable') ?></legend>
        <?php
            echo $this->Form->input('field_name');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
