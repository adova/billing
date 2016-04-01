<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Previous Package'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="previousPackages index large-9 medium-8 columns content">
    <h3><?= __('Previous Packages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('package_id') ?></th>
                <th><?= $this->Paginator->sort('ammount') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($previousPackages as $previousPackage): ?>
            <tr>
                <td><?= $this->Number->format($previousPackage->id) ?></td>
                <td><?= $previousPackage->has('package') ? $this->Html->link($previousPackage->package->id, ['controller' => 'Packages', 'action' => 'view', $previousPackage->package->id]) : '' ?></td>
                <td><?= $this->Number->format($previousPackage->ammount) ?></td>
                <td><?= h($previousPackage->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $previousPackage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $previousPackage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $previousPackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $previousPackage->id)]) ?>
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
