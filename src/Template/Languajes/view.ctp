<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Languaje $languaje
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Languaje'), ['action' => 'edit', $languaje->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Languaje'), ['action' => 'delete', $languaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languaje->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languajes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Languaje'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="languajes view large-9 medium-8 columns content">
    <h3><?= h($languaje->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Languaje') ?></th>
            <td><?= h($languaje->languaje) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= h($languaje->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= $languaje->has('cv') ? $this->Html->link($languaje->cv->id, ['controller' => 'Cvs', 'action' => 'view', $languaje->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($languaje->id) ?></td>
        </tr>
    </table>
</div>
