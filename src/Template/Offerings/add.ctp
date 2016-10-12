<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Offerings'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="offerings form large-10 medium-9 columns">
    <?= $this->Form->create($offering) ?>
    <fieldset>
        <legend><?= __('Add Offering') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
