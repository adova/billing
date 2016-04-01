<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Previous Packages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="previousPackages form large-9 medium-8 columns content">
    <?= $this->Form->create($previousPackage) ?>
    <fieldset>
        <legend><?= __('Add Previous Package') ?></legend>
        <?php
            echo $this->Form->input('package_id', ['options' => $packages]);
            echo $this->Form->input('ammount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
