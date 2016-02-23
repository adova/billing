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