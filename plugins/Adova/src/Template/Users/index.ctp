


    <div class="page-title">
        <span class="title">Users List </span> (  Shows <span class="description"><?= $this->Paginator->counter() ?> )</span>
        <div class="description"></div>
    </div>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
            <table class="table" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name') ?></th>
                        <th><?= $this->Paginator->sort('last_name') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
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
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->address) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>',
                            ['action' => 'view', $user->id] ,
                            ['class' => '', 'escape' => false]
                            ) ?>
                            <?= $this->Html->link('<i class="glyphicon glyphicon-edit"></i>',
                                ['action' => 'edit', $user->id] ,
                                ['class' => '' , 'escape' => false]) ?>
                            <i class=""><?= $this->Form->postLink('<i class="glyphicon glyphicon-remove"></i>',
                                    ['action' => 'delete', $user->id],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false ]) ?></i>
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

    </div>



