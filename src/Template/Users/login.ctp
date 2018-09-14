
<?=$this->layout = 'error';?>
<?=$this->layout = 'loginview';?>

   
 <div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingrese su correo y contraseña') ?></legend>
        <?= $this->Form->control('email',['label'=>'Correo']) ?>
        <?= $this->Form->control('password',['label'=>'Contraseña']) ?>
    </fieldset>
    <?= $this->Form->button(__('Ingresar')); ?>
    <?= $this->Form->end() ?>
</div>
  