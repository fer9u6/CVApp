<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cvs'), ['controller' => 'Cvs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cv'), ['controller' => 'Cvs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone House') ?></th>
            <td><?= h($user->phone_house) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Cellphone') ?></th>
            <td><?= h($user->phone_cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residence') ?></th>
            <td><?= h($user->residence) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cvs') ?></h4>
        <?php if (!empty($user->cvs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profile') ?></th>
                <th scope="col"><?= __('Skills') ?></th>
                <th scope="col"><?= __('Recommendations') ?></th>
                <th scope="col"><?= __('Acknowledgments') ?></th>
                <th scope="col"><?= __('Visits') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->cvs as $cvs): ?>
            <tr>
                <td><?= h($cvs->id) ?></td>
                <td><?= h($cvs->profile) ?></td>
                <td><?= h($cvs->skills) ?></td>
                <td><?= h($cvs->recommendations) ?></td>
                <td><?= h($cvs->acknowledgments) ?></td>
                <td><?= h($cvs->visits) ?></td>
                <td><?= h($cvs->user_id) ?></td>
                <td><?= h($cvs->category) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cvs', 'action' => 'view', $cvs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cvs', 'action' => 'edit', $cvs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cvs', 'action' => 'delete', $cvs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cvs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
