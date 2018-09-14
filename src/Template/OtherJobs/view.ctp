<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherJob $otherJob
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Other Job'), ['action' => 'edit', $otherJob->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Other Job'), ['action' => 'delete', $otherJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherJob->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Other Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Other Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="otherJobs view large-9 medium-8 columns content">
    <h3><?= h($otherJob->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= $otherJob->has('cv') ? $this->Html->link($otherJob->cv->id, ['controller' => 'Cvs', 'action' => 'view', $otherJob->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($otherJob->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Since') ?></th>
            <td><?= h($otherJob->since) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Until') ?></th>
            <td><?= h($otherJob->until) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($otherJob->description)); ?>
    </div>
</div>
