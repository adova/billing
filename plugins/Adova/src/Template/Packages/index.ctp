<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Previous Packages'), ['controller' => 'PreviousPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Previous Package'), ['controller' => 'PreviousPackages', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="title"><b><?= __('Packages') ?></b></div>
        </div>
        <div class="pull-right card-action">
            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-search"></i> Search
            </button>
            <?=
            $this->Html->link('<i class="glyphicon glyphicon-plus"></i> Add Package',
                [
                    'action' => 'add',

                ],
                [
                    'class' => 'btn btn-sm btn-info',
                    'escape' => false
                ]
            )
            ?>
        </div>
        <div class="clear-both"></div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" cellpadding="0" cellspacing="0">
                <thead class="active">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('package_name') ?></th>
                <th><?= $this->Paginator->sort('ammount') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packages as $package): ?>
            <tr>
                <td><?= $this->Number->format($package->id) ?></td>
                <td><?= h($package->package_name) ?></td>
                <td><?= $this->Number->format($package->ammount) ?></td>
                <td><?= h($package->status) ?></td>
                <td><?= h($package->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $package->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $package->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $package->id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Search Packages</h4>
            </div>
            <div class="modal-body">
                <div class="packages form large-9 medium-8 columns content">
                    <?= $this->Form->create($package) ?>
                    <fieldset>
                        <legend><?= __('Add Package') ?></legend>
                        <?php
                        echo $this->Form->input('package_name');
                        echo $this->Form->input('ammount');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>