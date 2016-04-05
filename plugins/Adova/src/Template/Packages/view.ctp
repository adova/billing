<div class="row">
    <div class="col-xs-6">
        <h4><?= __('Package Information') ?></h4>
        <table class="table">
            <tr>
                <th class="active"><?= __('Package Name') ?></th>
                <td><?= h($package->package_name) ?></td>
            </tr>
            <tr>
                <th class="active"><?= __('Id') ?></th>
                <td><?= h($package->id) ?></td>
            </tr>
            <tr>
                <th class="active"><?= __('Ammount') ?></th>

                <td><?= h($package->ammount) ?></td>
            </tr>
            <th class="active"><?= __('Created') ?></th>
            <td><?= h($package->created) ?></td>
            </tr>
            <tr>
                <th class="active"><?= __('Status') ?></th>
                <td><?= $package->status ? __('Yes') : __('No') ?></td>
            </tr>
        </table>
    </div>
        <div class="related">
            <h4><?= __('Previous Packages Price') ?></h4>
            <?php if (!empty($package->previous_packages)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Package Id') ?></th>
                    <th><?= __('Ammount') ?></th>
                    <th><?= __('Created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($package->previous_packages as $previousPackages): ?>
                <tr>
                    <td><?= h($previousPackages->id) ?></td>
                    <td><?= h($previousPackages->package_id) ?></td>
                    <td><?= h($previousPackages->ammount) ?></td>
                    <td><?= h($previousPackages->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'PreviousPackages', 'action' => 'view', $previousPackages->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'PreviousPackages', 'action' => 'edit', $previousPackages->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'PreviousPackages', 'action' => 'delete', $previousPackages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $previousPackages->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
</div>
