
<div class="side-body">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Expandables'), ['controller' => 'Expandables', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Expandable'), ['controller' => 'Expandables', 'action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="page-title">
        <span class="title">Table</span>
        <div class="description">A bootstrap table for display list of data.</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Table</div>
                    </div>
                </div>
                <div class="card-body">
            <table class="table" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name') ?></th>
                        <th><?= $this->Paginator->sort('last_name') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('password') ?></th>
                        <th><?= $this->Paginator->sort('phone') ?></th>
                        <th><?= $this->Paginator->sort('address') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->password) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->address) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


