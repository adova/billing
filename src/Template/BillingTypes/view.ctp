<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Billing Type'), ['action' => 'edit', $billingType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing Type'), ['action' => 'delete', $billingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billing Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="billingTypes view large-9 medium-8 columns content">
    <h3><?= h($billingType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($billingType->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= $this->Number->format($billingType->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($billingType->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($billingType->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $billingType->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Generates') ?></h4>
        <?php if (!empty($billingType->generates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Package User Id') ?></th>
                <th><?= __('Billing Type Id') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($billingType->generates as $generates): ?>
            <tr>
                <td><?= h($generates->id) ?></td>
                <td><?= h($generates->package_user_id) ?></td>
                <td><?= h($generates->billing_type_id) ?></td>
                <td><?= h($generates->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Generates', 'action' => 'view', $generates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Generates', 'action' => 'edit', $generates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Generates', 'action' => 'delete', $generates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
