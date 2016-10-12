<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Expense'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="expenses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($expenses as $expense): ?>
        <tr>
            <td><?= $this->Number->format($expense->id) ?></td>
            <td><?= h($expense->date) ?></td>
            <td><?= h($expense->description) ?></td>
            <td><?= $this->Number->format($expense->amount) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
