<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Package'), ['action' => 'edit', $package->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Package'), ['action' => 'delete', $package->id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Previous Packages'), ['controller' => 'PreviousPackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Previous Package'), ['controller' => 'PreviousPackages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="packages view large-9 medium-8 columns content">
    <h3><?= h($package->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Package Name') ?></th>
            <td><?= h($package->package_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($package->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ammount') ?></th>
            <td><?= $this->Number->format($package->ammount) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($package->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $package->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Previous Packages') ?></h4>
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
