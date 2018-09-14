<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv[]|\Cake\Collection\CollectionInterface $cvs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cv'), ['action' => 'add']) ?></li>
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
<div class="cvs index large-9 medium-8 columns content">
    <h3><?= __('Cvs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skills') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cvs as $cv): ?>
            <tr>
                <td><?= $this->Number->format($cv->id) ?></td>
                <td><?= h($cv->skills) ?></td>
                <td><?= $this->Number->format($cv->user_id) ?></td>
                <td><?= h($cv->category) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cv->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cv->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cv->id)]) ?>
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
