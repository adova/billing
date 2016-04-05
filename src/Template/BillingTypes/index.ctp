<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Billing Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['controller' => 'Generates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Generate'), ['controller' => 'Generates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billingTypes index large-9 medium-8 columns content">
    <h3><?= __('Billing Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billingTypes as $billingType): ?>
            <tr>
                <td><?= $this->Number->format($billingType->id) ?></td>
                <td><?= $this->Number->format($billingType->name) ?></td>
                <td><?= h($billingType->created) ?></td>
                <td><?= h($billingType->modified) ?></td>
                <td><?= h($billingType->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $billingType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingType->id)]) ?>
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
