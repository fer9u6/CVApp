<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv $cv
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languajes'), ['controller' => 'Languajes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Languaje'), ['controller' => 'Languajes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Other Jobs'), ['controller' => 'OtherJobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Other Job'), ['controller' => 'OtherJobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cvs form large-9 medium-8 columns content">
    <?= $this->Form->create($cv) ?>
    <fieldset>
        <legend><?= __('Add Cv') ?></legend>
        <?php
            echo $this->Form->control('profile');
            echo $this->Form->control('skills');
            echo $this->Form->control('recommendations');
            echo $this->Form->control('acknowledgments');
            echo $this->Form->control('user_id');
            echo $this->Form->control('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
