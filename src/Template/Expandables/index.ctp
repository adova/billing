<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Expandable'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informations'), ['controller' => 'Informations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Information'), ['controller' => 'Informations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="expandables index large-9 medium-8 columns content">
    <h3><?= __('Expandables') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('field_name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($expandables as $expandable): ?>
            <tr>
                <td><?= $this->Number->format($expandable->id) ?></td>
                <td><?= h($expandable->field_name) ?></td>
                <td><?= h($expandable->created) ?></td>
                <td><?= h($expandable->modified) ?></td>
                <td><?= $expandable->has('user') ? $this->Html->link($expandable->user->id, ['controller' => 'Users', 'action' => 'view', $expandable->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $expandable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expandable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expandable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expandable->id)]) ?>
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
