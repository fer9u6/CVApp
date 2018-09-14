<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
 use Cake\Routing\Router;
?>
<!--Despues hacer la barra de 'buscar', por ahora hacer los checkboxes-->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
	<?= $this->Form->create() ?>
        <li class="heading"><?= 'Categorías' ?></li>
		<li><?=$this->Form->hidden('d_id', ['value'=>$theuserid]);?></li>
		<li><?= $this->Form->radio('radio', 
    [
        ['value' => 'programacion', 'text' => 'Programación'],
        ['value' => 'progJuego', 'text' => 'Programación de videojuegos'],
        ['value' => 'movil', 'text' => 'Desarrollo Móvil'],
        ['value' => 'disenografico', 'text' => 'Diseño gráfico'],
        ['value' => 'anim3D', 'text' => 'Animación/Diseño 3D'],
        ['value' => 'ingenieria', 'text' => 'Ingeniería'],
        ['value' => 'creacioninfografias', 'text' => 'Creación de infografías'],
        ['value' => 'desarrmarca', 'text' => 'Desarrollador de marcas'],
        ['value' => 'brandingcorp', 'text' => 'Branding Corporativo'],
        ['value' => 'serviciocliente', 'text' => 'Servicio al cliente'],
        ['value' => 'vendedores', 'text' => 'Vendedores'],
        ['value' => 'encuestador', 'text' => 'Encuestador'],
        ['value' => 'digitador', 'text' => 'Digitador'],
        ['value' => 'fotografia', 'text' => 'Fotografia'],
        ['value' => 'contaduria', 'text' => 'Contaduría'],
        ['value' => 'admin', 'text' => 'Administración'],
        ['value' => 'analfinan', 'text' => 'Analista financiero'],
        ['value' => 'planestrat', 'text' => 'Planificación estratégica'],
        ['value' => 'ecommerce', 'text' => 'Consultor de e-commerce'],
        ['value' => 'topografo', 'text' => 'Topógrafo'],
        ['value' => 'arqui', 'text' => 'Arquitectura'],
        ['value' => 'jardin', 'text' => 'Jardinería/Paisajismo'],
        ['value' => 'traductor', 'text' => 'Traductor'],
        ['value' => 'intersenas', 'text' => 'Intérprete de señas'],
        ['value' => 'educacion', 'text' => 'Educación'],
        ['value' => 'instmanejo', 'text' => 'Instructor de manejo'],
        ['value' => 'commmanager', 'text' => 'Community manager'],
        ['value' => 'asistlegal', 'text' => 'Asistencia legal'],
        ['value' => 'ventas', 'text' => 'Ventas'],
        ['value' => 'psico', 'text' => 'Psicología'],
        ['value' => 'nutri', 'text' => 'Nutricionista'],
        ['value' => 'publicista', 'text' => 'Publicista'],
        ['value' => 'relpublico', 'text' => 'Relacionista público'],
        ['value' => 'marketing', 'text' => 'Marketing'],
        ['value' => 'ventas', 'text' => 'Ventas'],
        ['value' => 'electricista', 'text' => 'Electricista'],
        ['value' => 'vet', 'text' => 'Veterinario'],
        ['value' => 'disenoweb', 'text' => 'Diseño páginas web'],
        ['value' => 'edicion', 'text' => 'Edición'],
        ['value' => 'diseno', 'text' => 'Diseño'],
        ['value' => 'soporte', 'text' => 'Soporte'],
        ['value' => 'multimedia', 'text' => 'Multimedia'],
        ['value' => 'chef', 'text' => 'Chef / Cocinero'],
        ['value' => 'plomeria', 'text' => 'Plomería'],
        ['value' => 'fitness', 'text' => 'Entretenimiento fitness'],
    ]);?></li>
	 <?= $this->Form->button(__('Buscar')) ?>
	 <?= $this->Form->end() ?>
	
    </ul>
</nav>

<div class="cvs index large-9 medium-8 columns content">
<?php if($theuserid != -1): ?>
    
	<?= $this->Form->postButton('Volver a perfil', ['controller' => 'users', 'action' => 'profile', $theuserid]) ?>
	
	
	<?php endif;?>
	<br>
	<br>
    <h3><?= __('Cvs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skills',['label'=>'Habilidades']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category',['label'=>'Categoría']) ?></th>
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
						<?= $this->Html->link(__('View'), ['action' => 'view', $cv->id,$theuserid]) ?>
						
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

