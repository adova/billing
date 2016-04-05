<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Package User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packageUsers index large-9 medium-8 columns content">
    <h3><?= __('Package Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('package_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packageUsers as $packageUser): ?>
            <tr>
                <td><?= $this->Number->format($packageUser->id) ?></td>
                <td><?= $packageUser->has('user') ? $this->Html->link($packageUser->user->id, ['controller' => 'Users', 'action' => 'view', $packageUser->user->id]) : '' ?></td>
                <td><?= $packageUser->has('package') ? $this->Html->link($packageUser->package->id, ['controller' => 'Packages', 'action' => 'view', $packageUser->package->id]) : '' ?></td>
                <td><?= h($packageUser->created) ?></td>
                <td><?= h($packageUser->modified) ?></td>
                <td><?= h($packageUser->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $packageUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $packageUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $packageUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageUser->id)]) ?>
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
