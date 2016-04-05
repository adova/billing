<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Generate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Package Users'), ['controller' => 'PackageUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package User'), ['controller' => 'PackageUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Types'), ['controller' => 'BillingTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Type'), ['controller' => 'BillingTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generates index large-9 medium-8 columns content">
    <h3><?= __('Generates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('package_user_id') ?></th>
                <th><?= $this->Paginator->sort('billing_type_id') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generates as $generate): ?>
            <tr>
                <td><?= $this->Number->format($generate->id) ?></td>
                <td><?= $generate->has('package_user') ? $this->Html->link($generate->package_user->id, ['controller' => 'PackageUsers', 'action' => 'view', $generate->package_user->id]) : '' ?></td>
                <td><?= $generate->has('billing_type') ? $this->Html->link($generate->billing_type->name, ['controller' => 'BillingTypes', 'action' => 'view', $generate->billing_type->id]) : '' ?></td>
                <td><?= $this->Number->format($generate->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $generate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $generate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $generate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
