<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
html, body{
  font-family:  "raleway-regular", Helvetica, Arial, sans-serif;
}
h1, h2, h3, h4, h5, h6 {
  font-family: "raleway-bold", Helvetica, Arial, sans-serif;
}
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"></li>
		<li></li>
        <li><?= $this->Html->link(__('Editar mi perfil'), ['action' => 'edit', $user->id]) ?> </li>
		<!--
        <li><?= $this->Form->postLink(__('Eliminar cuenta'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        -->
		<li><?= $this->Html->link(__('Nuevo Cv'), ['controller' => 'Cvs', 'action' => 'nuevo', h($user->id)]) ?> </li>
		<li><?=$this->Html->link("Buscar CVs", ['controller' => 'cvs', 'action' => 'search', h($user->id), "todo", h($user->id)]); ?></li>
    
	     
	
	</ul>
	
	
</nav>
<div class="users view large-9 medium-8 columns content">
    
	<div class="users view large-9 medium-8 columns content">
		<h3><?= h($user->name) ?></h3>
		<table class="vertical-table">
			<tr>
				<th scope="row"><?= __('Nombre') ?></th>
				<td><?= h($user->name) ?></td>
			</tr>
			 <tr>
				<th scope="row"><?= __('Apellido') ?></th>
				<td><?= h($user->lastname) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Email') ?></th>
				<td><?= h($user->email) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Telefono de casa') ?></th>
				<td><?= h($user->phone_house) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Telefono de celular') ?></th>
				<td><?= h($user->phone_cellphone) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Residencia') ?></th>
				<td><?= h($user->residence) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Fecha de nacimiento') ?></th>
				<td><?= h($user->birthday) ?></td>
			</tr>
		</table>
	</div>
	
	<div class="related large-9 medium-8">
		<h4><?='Cvs'?></h4>
	</div>
	
    <div class="related">
        
        <?php if (!empty($user->cvs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Perfil') ?></th>
                <th scope="col"><?= __('Habilidades') ?></th>
                <th scope="col"><?= __('Categoría') ?></th>
				<th scope="col"><?= __('Recomendaciones') ?></th>
				<th scope="col"><?= __('     ') ?></th>
            </tr>
	 <?php foreach ($user->cvs as $cvs): ?>
            <tr>
				<td><?= h($cvs->profile) ?></td>
                <td><?= h($cvs->skills) ?></td>
                <td><?= h($cvs->category) ?></td>
				 <td><?= h($cvs->recommendations) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Ver', ['controller' => 'Cvs', 'action' => 'view', $cvs->id,$cvs->user_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Cvs', 'action' => 'edit', $cvs->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Cvs', 'action' => 'verificarBorrado', $cvs->id]) ?>
                </td>
            </tr>
             <?php endforeach; ?>
        </table>
        <?php endif; ?>
	
	
	
     </div>
 </div>
