<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Informations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Expandables'), ['controller' => 'Expandables', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expandable'), ['controller' => 'Expandables', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informations form large-9 medium-8 columns content">
    <?= $this->Form->create($information) ?>
    <fieldset>
        <legend><?= __('Add Information') ?></legend>
        <?php
            echo $this->Form->input('value');
            echo $this->Form->input('expandable_id', ['options' => $expandables]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
