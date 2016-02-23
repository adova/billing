
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="title"><b>Users List</b></div>
        </div>
        <div class="pull-right card-action">
            <?=
            $this->Html->link('<i class="glyphicon glyphicon-plus"></i> Add User',
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
                            <td>
                                <?php
                                if ($user->first_name) {
                                    echo $user->first_name;
                                } else {
                                    echo 'N/A';
                                }
                                ?>
                            </td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->phone) ?></td>
                            <td><?= h($user->address) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<i class="glyphicon glyphicon-eye-open info"></i>',
                                    ['action' => 'view', $user->id],
                                    ['class' => '', 'escape' => false]
                                ) ?>
                                <?= $this->Html->link('<i class="glyphicon glyphicon-edit warning"></i>',
                                    ['action' => 'edit', $user->id],
                                    ['class' => '', 'escape' => false]) ?>
                                <i class=""><?= $this->Form->postLink('<i class="glyphicon glyphicon-remove danger"></i>',
                                        ['action' => 'delete', $user->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false]) ?></i>
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
</div>


