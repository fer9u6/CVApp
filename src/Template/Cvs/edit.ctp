<?php
/**
  *Template/Cvs/edit
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv $cv
 */
 $levels =['principiante'=>'Principiante','intermediobajo'=>'Intermedio bajo','intermedio'=>'Intermedio','intermedioalto'=>'Intermedio alto','avanzado'=>'Avanzado'];
?>
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
        
        <li><?= $this->Html->link(__('Volver a perfil'), ['controller' => 'Users', 'action' => 'profile',$cv->user_id]) ?></li>
    </ul>
</nav>
<div class="cvs form large-9 medium-8 columns content">
    <?= $this->Form->create($cv) ?>
	
	
    <fieldset>
        <legend><?= __('Editar Cv') ?></legend>
        <?php
            echo $this->Form->control('profile', ['label' => 'Perfil']);
            echo $this->Form->control('skills', ['label' => 'Habilidades']);
            echo $this->Form->control('recommendations', ['label' => 'Recomendaciones']);
            echo $this->Form->control('acknowledgments', ['label' => 'Reconocimientos']);
            echo $this->Form->control('category', ['label' => 'Categorías']);
			
        ?>
		<legend>Editar educación</legend>
		<?php 
		$count = 0;
		foreach ($cv->educations as $educations): 
		 echo $this->Form->hidden("educations.{$count}.id");
		 echo $this->Form->control("educations.{$count}.degree",['label' => 'Grado']);
		 echo $this->Form->control("educations.{$count}.date",['label' => 'Fecha','minYear' => 1950]);
		 echo $this->Form->control("educations.{$count}.institution",['label' => 'Institución']);
		
		$count ++;
		?>		  
		<?php endforeach; ?>
		
		  <legend>Editar experiencia</legend>
		<?php 
		$count = 0;
		foreach ($cv->experiences as $experiences): 
		 echo $this->Form->hidden("experiences.{$count}.id");
		 echo $this->Form->control("experiences.{$count}.enterprice",['label' => 'Empresa']);
		 echo $this->Form->control("experiences.{$count}.position",['label' => 'Cargo']);
		 echo $this->Form->control("experiences.{$count}.since",['label' => 'desde','minYear' => 1950]);
		 echo $this->Form->control("experiences.{$count}.until",['label' => 'hasta','minYear' => 1950]);
		 echo $this->Form->control("experiences.{$count}.description",['label' => 'Descripción']);
		$count ++;
		?>		  
		<?php endforeach; ?>
		
		 <legend>Editar Idiomas</legend>
		<?php 
		$count = 0;
		foreach ($cv->languajes as $languajes): 
		 echo $this->Form->hidden("languajes.{$count}.id");
		 echo $this->Form->control("languajes.{$count}.languaje",['options'=>$levels,'label' => 'Idioma']);
		 echo $this->Form->control("languajes.{$count}.level",['label' => 'Nivel']);
		$count ++;
		?>		  
		<?php endforeach; ?>
		
		 <legend>Editar Otros Trabajos</legend>
		<?php 
		$count = 0;
		foreach ($cv->other_jobs as $other_jobs): 
		 echo $this->Form->hidden("other_jobs.{$count}.id");
		 echo $this->Form->control("other_jobs.{$count}.description",['label' => 'Descripción']);
		 echo $this->Form->control("other_jobs.{$count}.since",['label' => 'desde','minYear' => 1950]);
		 echo $this->Form->control("other_jobs.{$count}.until",['label' => 'hasta','minYear' => 1950]);
		$count ++;
		?>		  
		<?php endforeach; ?>
		
    </fieldset>
	 
	
	
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
	

</div>
