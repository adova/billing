<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Information'), ['action' => 'edit', $information->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Information'), ['action' => 'delete', $information->id], ['confirm' => __('Are you sure you want to delete # {0}?', $information->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Informations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expandables'), ['controller' => 'Expandables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expandable'), ['controller' => 'Expandables', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="informations view large-9 medium-8 columns content">
    <h3><?= h($information->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($information->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Expandable') ?></th>
            <td><?= $information->has('expandable') ? $this->Html->link($information->expandable->id, ['controller' => 'Expandables', 'action' => 'view', $information->expandable->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($information->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($information->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($information->modified) ?></td>
        </tr>
    </table>
</div>
