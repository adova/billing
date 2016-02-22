<!--
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
</nav> -->

<div class="row">
    <div class="col-xs-6">
        <div class="card">

            <div class="card-body">

                <h4><?= __('Basic Information') ?></h4>
                <table class="table">
                    <tr>
                        <th class="active"><?= __('First Name') ?></th>
                        <td><?= h($user->first_name) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Last Name') ?></th>
                        <td><?= h($user->last_name) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <th class="active"><?= __('Phone') ?></th>
                    <td><?= h($user->phone) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Address') ?></th>
                        <td><?= h($user->address) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Role') ?></th>
                        <td><?= $this->Number->format($user->role) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                    <tr>
                        <th class="active"><?= __('Modified') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="card">
            <div class="card-body">
                <div class="related">
                    <h4><?= __('Extra Information') ?></h4>
                    <?php if (!empty($user->expandables)): ?>
                        <table class="table">
                            <?php foreach ($user->expandables as $expandables): ?>
                                <tr>
                                    <td class="active"><?= h($expandables->field_name) ?></td>
                                    <td>
                                        <?php foreach ($expandables['informations'] as $information): ?>
                                            <?php echo $information['value'] ?>
                                            <br>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>