<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Languaje $languaje
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Languajes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="languajes form large-9 medium-8 columns content">
    <?= $this->Form->create($languaje) ?>
    <fieldset>
        <legend><?= __('Add Languaje') ?></legend>
        <?php
            echo $this->Form->control('languaje');
            echo $this->Form->control('level');
            echo $this->Form->control('cv_id', ['options' => $cvs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
