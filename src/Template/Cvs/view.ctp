<?php
/**
  *Template/Cvs/view
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv $cv
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('') ?></li>
		<?php if($theuserid != -1): ?>
	    <li><?= $this->Html->link('Volver a perfil', ['controller' => 'users', 'action' => 'profile', $theuserid]) ?></li>
	    <?php endif;?>
		<li><?=$this->Html->link("Buscar CVs", ['controller' => 'cvs', 'action' => 'search', $theuserid, "todo"]); ?></li>
		
		 
        
    </ul>
</nav>
<div class="cvs view large-9 medium-8 columns content">
	<br>
	<h3><?= $user->name ?></h3>
	<br>
	<div class="users view large-12 medium-12 columns content">
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
	<div class="users view large-12 medium-12 columns content">
		<table class="vertical-table">
			<tr>
				<th scope="row"><?= __('Habilidades') ?></th>
				<td><?= h($cv->skills) ?></td>
			</tr>
			<tr>
				<th scope="row"><?= __('Categoría') ?></th>
				<td><?= h($cv->category) ?></td>
			</tr>
		</table>
	</div>
	<div class="users view large-12 medium-12 columns content">
    <div class="row">
        <h4><?= __('Perfil') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->profile)); ?>
    </div>
    <div class="row">
        <h4><?= __('Referencias') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->recommendations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Reconocimientos') ?></h4>
        <?= $this->Text->autoParagraph(h($cv->acknowledgments)); ?>
    </div>
    
    <div class="related">
        <h4><?= __('Educación') ?></h4>
        <?php if (!empty($cv->educations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Institución') ?></th>
                <th scope="col"><?= __('Fecha Graduación') ?></th>
                <th scope="col"><?= __('Grado') ?></th>
            </tr>
            <?php foreach ($cv->educations as $educations):
			   if(trim(h($educations->institution)) === '' || is_null(h($educations->institution)) || 
			   empty(h($educations->institution)) || !h($educations->institution))
			?>
				 <tr>
					<td><?= h($educations->institution) ?></td>
					<td><?= h($educations->date) ?></td>
					<td><?= h($educations->degree) ?></td>
				</tr>
			 
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Experiencias') ?></h4>
        <?php if (!empty($cv->experiences)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
               
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Posicion') ?></th>
                <th scope="col"><?= __('Desde') ?></th>
                <th scope="col"><?= __('Hasta') ?></th>
                <th scope="col"><?= __('Descripción') ?></th>
                
                <th scope="col" class="actions"><?= __('') ?></th>
            </tr>
            <?php foreach ($cv->experiences as $experiences): ?>
            <tr>
               
                <td><?= h($experiences->enterprise) ?></td>
                <td><?= h($experiences->position) ?></td>
                <td><?= h($experiences->from) ?></td>
                <td><?= h($experiences->until) ?></td>
                <td><?= h($experiences->description) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Idiomas') ?></h4>
        <?php if (!empty($cv->languajes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Idioma') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
            </tr>
            <?php foreach ($cv->languajes as $languajes): ?>
            <tr>
                
                <td><?= h($languajes->languaje) ?></td>
                <td><?= h($languajes->level) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Otros trabajos realizados') ?></h4>
        <?php if (!empty($cv->other_jobs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
              
                <th scope="col"><?= __('Descripción') ?></th>
                <th scope="col"><?= __('Desde') ?></th>
                <th scope="col"><?= __('Hasta') ?></th>
            </tr>
            <?php foreach ($cv->other_jobs as $otherJobs): ?>
            <tr>
               
                <td><?= h($otherJobs->description) ?></td>
                <td><?= h($otherJobs->from) ?></td>
                <td><?= h($otherJobs->until) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
