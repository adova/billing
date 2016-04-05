<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Generate'), ['action' => 'edit', $generate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Generate'), ['action' => 'delete', $generate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Generates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Generate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Package Users'), ['controller' => 'PackageUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package User'), ['controller' => 'PackageUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Types'), ['controller' => 'BillingTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Type'), ['controller' => 'BillingTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generates view large-9 medium-8 columns content">
    <h3><?= h($generate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Package User') ?></th>
            <td><?= $generate->has('package_user') ? $this->Html->link($generate->package_user->id, ['controller' => 'PackageUsers', 'action' => 'view', $generate->package_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Billing Type') ?></th>
            <td><?= $generate->has('billing_type') ? $this->Html->link($generate->billing_type->name, ['controller' => 'BillingTypes', 'action' => 'view', $generate->billing_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($generate->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $this->Number->format($generate->active) ?></td>
        </tr>
    </table>
</div>
