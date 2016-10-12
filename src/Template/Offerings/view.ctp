<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Offering'), ['action' => 'edit', $offering->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offering'), ['action' => 'delete', $offering->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offering->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offerings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offering'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="offerings view large-10 medium-9 columns">
    <h2><?= h($offering->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($offering->id) ?></p>
            <h6 class="subheader"><?= __('Amount') ?></h6>
            <p><?= $this->Number->format($offering->amount) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($offering->date) ?></p>
        </div>
    </div>
</div>
