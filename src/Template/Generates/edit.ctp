<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $generate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $generate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Package Users'), ['controller' => 'PackageUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package User'), ['controller' => 'PackageUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Types'), ['controller' => 'BillingTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Type'), ['controller' => 'BillingTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generates form large-9 medium-8 columns content">
    <?= $this->Form->create($generate) ?>
    <fieldset>
        <legend><?= __('Edit Generate') ?></legend>
        <?php
            echo $this->Form->input('package_user_id', ['options' => $packageUsers]);
            echo $this->Form->input('billing_type_id', ['options' => $billingTypes]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
