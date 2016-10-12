<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Offering'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="offerings index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($offerings as $offering): ?>
        <tr>
            <td><?= $this->Number->format($offering->id) ?></td>
            <td><?= h($offering->date) ?></td>
            <td><?= $this->Number->format($offering->amount) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $offering->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offering->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offering->id)]) ?>
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
