<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expandables'), ['controller' => 'Expandables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expandable'), ['controller' => 'Expandables', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= $this->Number->format($user->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Expandables') ?></h4>
        <?php if (!empty($user->expandables)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Field Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->expandables as $expandables): ?>
            <tr>
                <td><?= h($expandables->id) ?></td>
                <td><?= h($expandables->field_name) ?></td>
                <td><?= h($expandables->created) ?></td>
                <td><?= h($expandables->modified) ?></td>
                <td><?= h($expandables->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Expandables', 'action' => 'view', $expandables->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Expandables', 'action' => 'edit', $expandables->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expandables', 'action' => 'delete', $expandables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expandables->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
