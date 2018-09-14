<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="experiences view large-9 medium-8 columns content">
    <h3><?= h($experience->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Enterprice') ?></th>
            <td><?= h($experience->enterprice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($experience->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= $experience->has('cv') ? $this->Html->link($experience->cv->id, ['controller' => 'Cvs', 'action' => 'view', $experience->cv->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($experience->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Since') ?></th>
            <td><?= h($experience->since) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Until') ?></th>
            <td><?= h($experience->until) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($experience->description)); ?>
    </div>
</div>
