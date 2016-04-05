<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Package User'), ['action' => 'edit', $packageUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Package User'), ['action' => 'delete', $packageUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Package Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="packageUsers view large-9 medium-8 columns content">
    <h3><?= h($packageUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $packageUser->has('user') ? $this->Html->link($packageUser->user->id, ['controller' => 'Users', 'action' => 'view', $packageUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Package') ?></th>
            <td><?= $packageUser->has('package') ? $this->Html->link($packageUser->package->id, ['controller' => 'Packages', 'action' => 'view', $packageUser->package->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($packageUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($packageUser->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($packageUser->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $packageUser->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Generates') ?></h4>
        <?php if (!empty($packageUser->generates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Package User Id') ?></th>
                <th><?= __('Billing Type Id') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($packageUser->generates as $generates): ?>
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
