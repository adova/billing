<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billingType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billingType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Billing Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billingTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($billingType) ?>
    <fieldset>
        <legend><?= __('Edit Billing Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
