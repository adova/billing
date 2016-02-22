

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
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


