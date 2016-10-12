<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Expenses'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="expenses form large-10 medium-9 columns">
    <?= $this->Form->create($expense) ?>
    <fieldset>
        <legend><?= __('Add Expense') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('description');
            echo $this->Form->input('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
