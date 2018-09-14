<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherJob $otherJob
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Other Jobs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="otherJobs form large-9 medium-8 columns content">
    <?= $this->Form->create($otherJob) ?>
    <fieldset>
        <legend><?= __('Add Other Job') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('since', ['empty' => true]);
            echo $this->Form->control('until', ['empty' => true]);
            echo $this->Form->control('cv_id', ['options' => $cvs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
