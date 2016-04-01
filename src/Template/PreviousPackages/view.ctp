<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Previous Package'), ['action' => 'edit', $previousPackage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Previous Package'), ['action' => 'delete', $previousPackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $previousPackage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Previous Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Previous Package'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="previousPackages view large-9 medium-8 columns content">
    <h3><?= h($previousPackage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Package') ?></th>
            <td><?= $previousPackage->has('package') ? $this->Html->link($previousPackage->package->id, ['controller' => 'Packages', 'action' => 'view', $previousPackage->package->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($previousPackage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ammount') ?></th>
            <td><?= $this->Number->format($previousPackage->ammount) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($previousPackage->created) ?></td>
        </tr>
    </table>
</div>
