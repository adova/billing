<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Billing Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billingTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($billingType) ?>
    <fieldset>
        <legend><?= __('Add Billing Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
