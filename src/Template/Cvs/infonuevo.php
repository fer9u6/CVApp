<?php
	echo '<br>';
	echo '<legend>   </legend>';
	echo '<br>';
	echo $this->Form->hidden('educations.' + id + '.id');
	echo $this->Form->control('experiences.' + id + '.enterprice',['label' => 'Empresa']);
	echo $this->Form->control('experiences.' + id + '.position',['label' => 'Cargo']);
	echo $this->Form->control('experiences.' + id + '.since',['label' => 'desde','default'=>'null']); 
	echo $this->Form->control('experiences.' + id + '.until',['label' => 'hasta']);
	echo $this->Form->control('experiences.' + id + '.description',['label' => 'Descripción']);
?>