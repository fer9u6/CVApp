<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<html>
	<head>
	<title>Sign Up</title>
	</head>
	
	<body>

		<h1>Sign Up</h1>
				
		<div class="users form large-9 medium-8 columns content">
			<?= $this->Form->create($user) ?>
			<fieldset>
				<legend><h1><?= __('Nuevo usuario') ?></h1></legend>
					
				<?php
				
					echo $this->Form->control('name', ['label' => 'Nombre*']);
					echo $this->Form->control('lastname', ['label' => 'Apellido(s)*']);
					echo $this->Form->control('email', ['label' => 'Correo']);
					echo $this->Form->control('phone_house', ['label' => 'Telefono de la casa']);
					echo $this->Form->control('phone_cellphone', ['label' => 'Telefono celular']);
					echo $this->Form->control('residence', ['label' => 'Residencia']);
					echo $this->Form->control('birthday', ['empty' => true,'minYear' => 1950, 'label' => 'Fecha de nacimiento']);
					echo $this->Form->control('password', ['label' => 'Contraseña*']);
					echo $this->Form->control('confirmpassword', ['label' => 'Confirmar contraseña*', 'type' => 'password']);	
					echo "Los campos con * son obligatorios";
					
				?>
			</fieldset>
			<?= $this->Form->button(__('Crear usuario')) ?>
			<?= $this->Form->end() ?>
		</div>
	</body>
</html>
