<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
		<li><?= $this->Html->link('Volver a perfil', ['action' => 'profile', $theid]) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= 'Edite su información' ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('lastname', ['label' => 'Apellido']);
            echo $this->Form->control('email', ['label' => 'Correo electrónico']);
            echo $this->Form->control('phone_house', ['label' => 'Teléfono de la casa']);
            echo $this->Form->control('phone_cellphone', ['label' => 'Celular']);
            echo $this->Form->control('residence', ['label' => 'Lugar de residencia']);
            echo $this->Form->control('birthday', ['label' => 'Fecha de nacimiento','empty' => true]);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
