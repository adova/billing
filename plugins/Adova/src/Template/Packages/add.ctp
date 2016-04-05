<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Previous Packages'), ['controller' => 'PreviousPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Previous Package'), ['controller' => 'PreviousPackages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packages form large-9 medium-8 columns content">
    <?= $this->Form->create($package) ?>
    <fieldset>
        <legend><?= __('Add Package') ?></legend>
        <?php
            echo $this->Form->input('package_name');
            echo $this->Form->input('ammount');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
