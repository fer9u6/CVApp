<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cree su Cv</title>
    
    <!--    Stylesheet Files    -->
   <!--  <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />  -->

    <?= $this->Html->css('normalize.css') ?>
    <?= $this->Html->css('foundation.css') ?>
	<?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!--    Javascript files are placed before </body>    -->
  </head>
  
  <body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
				<!--Si el usuario esta logueado, se muestra el boton logout-->
                <?php if($loggedIn) : ?>
                    <li class="a_topbar"><?= $this->Html->link('Salir de sesion', ['controller' => 'users', 'action' => 'logout','class'=>'topa']); ?></li>
                <!--Si el usuario no esta logueado, se ejecuta el signup de users-->
				<?php else : ?>
					<li  class="a_topbar"><?= $this->Html->link('Entrar como invitado', ['controller' => 'users', 'action' => 'invitado']); ?></li>
                    <li  class="a_topbar"><?= $this->Html->link('Registrarse', ['controller' => 'users', 'action' => 'signup']); ?></li>
					<li  class="a_topbar"><?= $this->Html->link('Iniciar sesión', ['controller' => 'users', 'action' => 'login/#loginform']); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
  
    <!--  Start Hero Section  -->
    <section class="hero">
     .
      <!--    Start Hero Caption    -->
      <section class="caption">
        <div class="row">
          <h1 class="mean_cap">Cree su cv</h1>
          <h2 class="sub_cap">Rápido y fácil.</h2>
         
        </div>
      </section>
      <!--    End Hero Caption    -->

    </section>
    <!--  End Hero Section  -->
    



    <!--  Start Services Section  -->
    <section class="services" id="services">     

      <!--    Start Services Titles    -->
      <div class="row">        
        <h1 class="mean_title">¿Cómo funciona?</h1> 
      </div>
      <!--    End Services Titles    -->

      <!--    Start Services List    -->
      <div class="row services_list">
        <div class="small-12 medium-3 large-3 columns">
         <!-- <img src="img/icon2.png" alt="" title="" class="serv_icon"/> -->
          <h2 class="title">Cree un cv</h2>
          <p>Cree uno o varios Cv , segun sus  aptitudes y asigneles categorias .</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
        <!--  <img src="img/icon1.png" alt="" title="" class="serv_icon"/>  -->
          <h2 class="title"> Revise los Cvs de otras personas</h2>
          <p>Mediante una busqueda por categorias puede encontrar los Cvs de su interés.</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
        <!--  <img src="img/icon3.png" alt="" title="" class="serv_icon"/> -->
          <h2 class="title">Dese a conocer </h2>
          <p>Con su perfil en linea aumente las posibilidades de ser contactado para un puesto que se adapte a usted.</p>
        </div>

        <div class="small-12 medium-3 large-3 columns">
         <!-- <img src="img/icon4.png" alt="" title="" class="serv_icon"/> -->
          <h2 class="title">Ingrese como invitado</h2>
          <p>Puede ingresar sin necesidad de tener una cuenta  y ver los Cvs de su interés.</p>
        </div>
      </div>
      <!--    End Services List    -->
	  
	  
	  
 
    </section>
    <!--  End Services Section  -->


           <div class="usersform" id="loginform">
				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create() ?>
				<fieldset>
					<legend><?= __('Ingrese su correo y contraseña') ?></legend>
					<?= $this->Form->control('email',['label'=>'correo']) ?>
					<?= $this->Form->control('password',['label'=>'contraseña']) ?>
				</fieldset>
				 
				<?= $this->Form->button(('Login')); ?>
				<?= $this->Form->end() ?>
		    </div>


    <!--  Start Call To Action Section  -->
    <section class="cta" id="Download">
      <div class="row">

       
        <!--    End CTA Titles    -->

      

      </div>
    </section>
    <!--  End Call To Action Section  -->


    <!--  Start Footer Section  -->
    <footer>
      <div class="row">
        
        <!--    Start Copyrights    -->
        <div class="small-12 medium-4 large-4 columns">
          <div class="copyrights">
            <a class="logo" href="#">
              <h1>Cv<span class="tld">.com</span></h1>
            </a>
          </div>
        </div>
        <!--    End Copyrights    -->


        <div class="small-12 medium-8 large-8 columns">
          <div class="contact_details right">
            <nav class="social">
              <ul class="no-bullet">
                <li><a href="http://facebook.com/pixelhint" target="_blank">Facebook</a></li>
                <li><a href="http://instagram.com/pixelhint" target="_blank">Instagram</a></li>
                <li><a href="http://twitter.com/pixelhint" target="_blank">Twitter</a></li>
                <li><a href="http://plus.google.com/+Pixelhint" target="_blank">Google+</a></li>
              </ul>
            </nav>

           
          </div>
        </div>

      </div>
    </footer>
    <!--  End Footer Section  -->


    <!--    Javascript Files    -->
  
   

  </body>
</html>
