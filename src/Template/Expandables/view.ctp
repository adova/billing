<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Expandable'), ['action' => 'edit', $expandable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expandable'), ['action' => 'delete', $expandable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expandable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expandables'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expandable'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Informations'), ['controller' => 'Informations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Information'), ['controller' => 'Informations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="expandables view large-9 medium-8 columns content">
    <h3><?= h($expandable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Field Name') ?></th>
            <td><?= h($expandable->field_name) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $expandable->has('user') ? $this->Html->link($expandable->user->id, ['controller' => 'Users', 'action' => 'view', $expandable->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($expandable->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($expandable->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($expandable->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Informations') ?></h4>
        <?php if (!empty($expandable->informations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Value') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Expandable Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($expandable->informations as $informations): ?>
            <tr>
                <td><?= h($informations->id) ?></td>
                <td><?= h($informations->value) ?></td>
                <td><?= h($informations->created) ?></td>
                <td><?= h($informations->modified) ?></td>
                <td><?= h($informations->expandable_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Informations', 'action' => 'view', $informations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Informations', 'action' => 'edit', $informations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Informations', 'action' => 'delete', $informations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
