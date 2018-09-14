<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Languaje[]|\Cake\Collection\CollectionInterface $languajes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Languaje'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="languajes index large-9 medium-8 columns content">
    <h3><?= __('Languajes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('languaje') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($languajes as $languaje): ?>
            <tr>
                <td><?= $this->Number->format($languaje->id) ?></td>
                <td><?= h($languaje->languaje) ?></td>
                <td><?= h($languaje->level) ?></td>
                <td><?= $languaje->has('cv') ? $this->Html->link($languaje->cv->id, ['controller' => 'Cvs', 'action' => 'view', $languaje->cv->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $languaje->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $languaje->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $languaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languaje->id)]) ?>
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
