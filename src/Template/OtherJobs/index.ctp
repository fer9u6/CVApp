<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherJob[]|\Cake\Collection\CollectionInterface $otherJobs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Other Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="otherJobs index large-9 medium-8 columns content">
    <h3><?= __('Other Jobs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('since') ?></th>
                <th scope="col"><?= $this->Paginator->sort('until') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($otherJobs as $otherJob): ?>
            <tr>
                <td><?= $this->Number->format($otherJob->id) ?></td>
                <td><?= h($otherJob->since) ?></td>
                <td><?= h($otherJob->until) ?></td>
                <td><?= $otherJob->has('cv') ? $this->Html->link($otherJob->cv->id, ['controller' => 'Cvs', 'action' => 'view', $otherJob->cv->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $otherJob->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $otherJob->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $otherJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherJob->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
