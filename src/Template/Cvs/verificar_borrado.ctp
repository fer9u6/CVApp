

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"></li>
		<li></li>
       <li><?= $this->Html->link(__('Volver a perfil'), ['controller' => 'Users', 'action' => 'profile',$cv->user_id]) ?></li>
	
	</ul>
	
	
</nav>
<div class="users view large-9 medium-8 columns content">
    
	<div class="users view large-9 medium-8 columns content">
		<h4>¿Esta seguro que quiere borrar el CV?</h4>
		<br>
		<h5>Esta accion es irreversible</h5>
		<br>
		<br>
		<?= $this->Form->postButton("Confirmar Borrado", ['controller' => 'cvs', 'action' => 'delete', h($cv->id)]); ?>
	</div>
	

	
    
 </div>





