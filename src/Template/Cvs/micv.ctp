<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv $cv
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cv'), ['action' => 'edit', $cv->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cv'), ['action' => 'delete', $cv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cv->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cvs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cv'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['controller' => 'Experiences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['controller' => 'Experiences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languajes'), ['controller' => 'Languajes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Languaje'), ['controller' => 'Languajes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Other Jobs'), ['controller' => 'OtherJobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Other Job'), ['controller' => 'OtherJobs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cvs view large-9 medium-8 columns content">
    <h3><?= h($cv->id) ?></h3>
    <table class="vertical-table">
	    <tr>
            <th scope="row"><?= __('profile') ?></th>
            <td><?= h($cv->skills) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skills') ?></th>
            <td><?= h($cv->skills) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($cv->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cv->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($cv->user_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Profile') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->profile)); ?>
    </div>
    <div class="row">
        <h4><?= __('Recommendations') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->recommendations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Acknowledgments') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->acknowledgments)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($cv->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Cv Id') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cv->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->lastname) ?></td>
                <td><?= h($users->cv_id) ?></td>
                <td><?= h($users->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Educations') ?></h4>
        <?php if (!empty($cv->educations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Institution') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Degree') ?></th>
                <th scope="col"><?= __('Cv Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cv->educations as $educations): ?>
            <tr>
                <td><?= h($educations->id) ?></td>
                <td><?= h($educations->institution) ?></td>
                <td><?= h($educations->date) ?></td>
                <td><?= h($educations->degree) ?></td>
                <td><?= h($educations->cv_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Educations', 'action' => 'view', $educations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Educations', 'action' => 'edit', $educations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educations', 'action' => 'delete', $educations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Experiences') ?></h4>
        <?php if (!empty($cv->experiences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Enterprise') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('From') ?></th>
                <th scope="col"><?= __('Until') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Cv Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cv->experiences as $experiences): ?>
            <tr>
                <td><?= h($experiences->id) ?></td>
                <td><?= h($experiences->enterprise) ?></td>
                <td><?= h($experiences->position) ?></td>
                <td><?= h($experiences->from) ?></td>
                <td><?= h($experiences->until) ?></td>
                <td><?= h($experiences->description) ?></td>
                <td><?= h($experiences->cv_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Experiences', 'action' => 'view', $experiences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Experiences', 'action' => 'edit', $experiences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Experiences', 'action' => 'delete', $experiences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Languajes') ?></h4>
        <?php if (!empty($cv->languajes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Languaje') ?></th>
                <th scope="col"><?= __('Level') ?></th>
                <th scope="col"><?= __('Cv Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cv->languajes as $languajes): ?>
            <tr>
                <td><?= h($languajes->id) ?></td>
                <td><?= h($languajes->languaje) ?></td>
                <td><?= h($languajes->level) ?></td>
                <td><?= h($languajes->cv_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Languajes', 'action' => 'view', $languajes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Languajes', 'action' => 'edit', $languajes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Languajes', 'action' => 'delete', $languajes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languajes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Other Jobs') ?></h4>
        <?php if (!empty($cv->other_jobs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('From') ?></th>
                <th scope="col"><?= __('Until') ?></th>
                <th scope="col"><?= __('Cv Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cv->other_jobs as $otherJobs): ?>
            <tr>
                <td><?= h($otherJobs->id) ?></td>
                <td><?= h($otherJobs->description) ?></td>
                <td><?= h($otherJobs->from) ?></td>
                <td><?= h($otherJobs->until) ?></td>
                <td><?= h($otherJobs->cv_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OtherJobs', 'action' => 'view', $otherJobs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OtherJobs', 'action' => 'edit', $otherJobs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OtherJobs', 'action' => 'delete', $otherJobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherJobs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
