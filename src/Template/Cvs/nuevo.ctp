<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cv $cv
 * @var \App\Model\Entity\Education $education
   View where the user create new cvs
 */
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
	    <li></li>
        <li class="heading"></li>
		 <li><?= $this->Html->link(__('Volver a perfil'), ['controller' => 'Users', 'action' => 'profile',$cv->user_id]) ?></li>
    </ul>

</nav>

<div class="cvs form large-9 medium-9 columns content">
    <?= $this->Form->create($cv) ?>
    <fieldset>
        <legend><?= __('Cree su Cv') ?></legend>
        <?php
		    
		    $categories =['programacion'=>'Programación','progJuego'=>'Programacion de video juegos','movil'=>'Programación Móvil','disenografico'=>'Diseño gráfico','anim3D'=>'Animación / diseño 3D','ingenieria'=>'Ingeniería','creacioninfografias'=>'Creación de infografías','desarrmarca'=> 'Desarrollador de marca','brandingcorp'=>'Branding corporativo','serviciocliente'=>'Servicio al cliente','vendedores'=>'Vendedores ','encuestador'=>'Encuestador','digitador'=>'Digitador','fotografia'=>'Fotografia','contaduria'=>'Contaduría','admin'=>'Administración','analfinan'=>'Analista financiero','planestrat'=>'Planificación estratégica','ecommerce'=>'Consultor de e-commerce','topografo'=>'Topógrafo','arqui'=>'Arquitectura','jardin'=>'Jardinería / paisajismo','traductor'=>'Traductor','intersenas'=>'Intérprete de señas','educacion'=>'Educación','instmanejo'=>'Instructor de manejo','commmanager'=>'Community manager','asistlegal'=>'Asistencia legal','ventas'=>'Ventas','psico'=>'Psicología','nutri'=>'Nutricionista','publicista'=>'Publicista','relpublico'=>'Relacionista público','marketing'=>'Marketing','ventas'=>'Ventas','electricista'=>'Electricista','vet'=>'Veterinario','disenoweb'=>'Diseño páginas web','edicion'=>'Edición','diseno'=>'Diseño','soporte'=>'Soporte','multimedia'=>'Multimedia','chef'=>'Chef / Cocinero','plomeria'=>'Plomería','fitness'=>'Entretenimiento fitness'];
		    $levels =['principiante'=>'Principiante','intermediobajo'=>'Intermedio bajo','intermedio'=>'Intermedio','intermedioalto'=>'Intermedio alto','avanzado'=>'Avanzado'];
			//echo ->'Informacion del cv'
            echo $this->Form->control('profile',['label' => 'Perfil']);
            echo $this->Form->control('skills',['label' => 'Habilidades']);
            echo $this->Form->control('recommendations',['label' => 'Referencias']);
            echo $this->Form->control('acknowledgments',['label' => 'Reconocimientos']);
			echo $this->Form->hidden('user_id.id');
            echo $this->Form->control('category',['empty'=>true,'label' => 'Categorias','type'=>'select','options'=>$categories]);
			?>
			<legend>Información sobre educación</legend>
			<br>
			
			<?php
			echo '<div id="educacion" class="panel mb-3">';
            echo $this->Form->control('educations.0.degree',['label' => 'Grado']);
			echo $this->Form->control('educations.0.date',['label' => 'Fecha','empty' => true,'minYear' => 1950]);
			echo $this->Form->control('educations.0.institution',['label' => 'Institución']);
			echo $this->Html->script('displayforms');
			echo $this->Html->script('jquery'); 
			echo $this->Html->script('jquery-3.3.1.min');
			?>
			<script language="javascript" type="text/javascript">
			
			function addFormFieldExp() 
			{
				var id = parseInt(document.getElementById("idExperience").value);
				
				var html1 = '<div id="row' + id + '">' + 
				'<div id="experiencia' + id + '"><br><legend>  </legend><br>' +
				'<input type="hidden" name="educations[' + id + '][id]">';
				var html2 = '<div class="input text"><label for="experiences-' + id + '-enterprice">Empresa</label><input type="text" name="experiences[' + id + '][enterprice]" maxlength="45" id="experiences-' + id + '-enterprice"></div>';
				var html3 = '<div class="input text"><label for="experiences-' + id + '-position">Cargo</label><input type="text" name="experiences[' + id + '][position]" maxlength="45" id="experiences-' + id + '-position"></div>';
				var html4 = '<div class="input date"><label>Desde</label><select name="experiences[' + id + '][since][year]"><option value="" selected="selected"></option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select><select name="experiences[' + id + '][since][month]"><option value="" selected="selected"></option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="experiences[' + id + '][since][day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>';
				var html5 = '<div class="input date"><label>Hasta</label><select name="experiences[' + id + '][until][year]"><option value="" selected="selected"></option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select><select name="experiences[' + id + '][until][month]"><option value="" selected="selected"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="experiences[' + id + '][until][day]"><option value="" selected="selected"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>';
				var html6 = '<div class="input textarea"><label for="experiences-' + id + '-description">Descripción</label><textarea name="experiences[' + id + '][description]" id="experiences-' + id + '-description" rows="5"></textarea></div></div>' + "</div>";
				
				//alert(html1);
				$('#divexp').append(html1);
				$('#divexp').append(html2);
				$('#divexp').append(html3);
				$('#divexp').append(html4);
				$('#divexp').append(html5);
				$('#divexp').append(html6);
				document.getElementById("idExperience").value = id+1;	
			}
			
			function addFormFieldIdiomas()
			{
				var id = parseInt(document.getElementById("idIdiomas").value); 
				var html = '<div id="idioma' + id + '"><br><legend>   </legend><br><div class="input text"><label for="languajes-' + id + '-languaje">Idioma</label><input type="text" name="languajes[' + id + '][languaje]" maxlength="45" id="languajes-' + id + '-languaje"></div><div class="input text"><label for="languajes-' + id + '-level">Nivel</label><input type="text" name="languajes[' + id + '][level]" maxlength="45" id="languajes-' + id + '-level"></div></div>';
				$('#dividiomas').append(html);
				document.getElementById("idIdiomas").value = id+1;
			}
			
			function addFormFieldOtros()
			{
				var id = parseInt(document.getElementById("idOtros").value); 
				
				var html1 = '<br><legend>  </legend><br><div class="input textarea"><label for="other-jobs-' + id + '-description">Descripción</label><textarea name="other_jobs[' + id + '][description]" id="other-jobs-' + id + '-description" rows="5"></textarea></div>';
				var html2 = '<div class="input date"><label>Desde</label><select name="other_jobs[' + id + '][since][year]"><option value="" selected="selected"></option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select><select name="other_jobs[' + id + '][since][month]"><option value="" selected="selected"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="other_jobs[' + id + '][since][day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>';
				var html3 = '<div class="input date"><label>Hasta</label><select name="other_jobs[' + id + '][until][year]"><option value="" selected="selected"></option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select><select name="other_jobs[' + id + '][until][month]"><option value="" selected="selected"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="other_jobs[' + id + '][until][day]"><option value="" selected="selected"></option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div><input type="hidden" name="other_jobs[1][description]" label="Descripción" id="oj11"><input type="hidden" name="other_jobs[1][since]" label="desde" id="oj12"><input type="hidden" name="other_jobs[1][until]" label="hasta" id="oj13">';
				
				$('#divotros').append(html1);
				$('#divotros').append(html2);
				$('#divotros').append(html3);
				document.getElementById("idOtros").value = id+1;
			}
			
			</script>
			
			
			
			<?php
			echo '<div id="educacion1" style="display: none">';
			echo '<br>';
			echo '<legend>   </legend>';
			echo '<br>';
			echo '<div class="input text"><label for="educations-1-degree">Grado</label><input name="educations[1][degree]" maxlength="100" id="educations-1-degree" type="text"></div>';
			echo '<div class="input date"><label>Fecha</label><select name="educations[1][date][year]"><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018" selected="selected">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option></select><select name="educations[1][date][month]"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07" selected="selected">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="educations[1][date][day]"><option value="01" selected="selected">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>';
	        echo '<div class="input text"><label for="educations-1-institution">Institución</label><input name="educations[1][institution]" maxlength="100" id="educations-1-institution" type="text"></div>';
	        echo '</div>';
			
			echo '<div id="educacion2" style="display: none">';
			echo '<br>';
			echo '<legend>   </legend>';
			echo '<br>';
			echo '<div class="input text"><label for="educations-2-degree">Grado</label><input name="educations[2][degree]" maxlength="100" id="educations-2-degree" type="text"></div>';
			echo '<div class="input date"><label>Fecha</label><select name="educations[2][date][year]"><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018" selected="selected">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option></select><select name="educations[2][date][month]"><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07" selected="selected">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select><select name="educations[2][date][day]"><option value="01" selected="selected">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>';
	        echo '<div class="input text"><label for="educations-2-institution">Institución</label><input name="educations[2][institution]" maxlength="100" id="educations-2-institution" type="text"></div>';
	        echo '</div>';
			echo '<button type="button" onclick="agregarEducacion();">+educacion</button>';
			echo '</div>';
	
	
			echo '<legend>Información sobre experiencia</legend>';
			echo '<div id="educacion" class="panel mb-3">';
			
			echo '<div id="divexp"></div>';
			echo '<button type="button" id="buttonexp" onClick="addFormFieldExp();">Agregar experiencia</button>';
			echo '</div>';
			?>
			<input type="hidden" id="idExperience" value="1">
			<?php
			echo '<legend>Idiomas</legend>';
			echo '<div id="educacion" class="panel mb-3">';
			echo '<div id="dividiomas"></div>';
			echo '<button type="button" onclick="addFormFieldIdiomas();">Agregar idioma</button>';
			echo '</div>';
			
			?>
			<input type="hidden" id="idIdiomas" value="1">
			<?php
			echo '<legend>Otros trabajos realizados</legend>';
			echo '<div id="educacion" class="panel mb-3">';
			echo '<div id="divotros"></div>';
			echo '<button type="button" onclick="addFormFieldOtros();">Agregar trabajo</button>';
			echo '</div>';
			
        ?>
		<input type="hidden" id="idOtros" value="1">
		
    </fieldset>
    <?= $this->Form->button(__('Crear cv')) ?>
    <?= $this->Form->end() ?>
	
	
	
</div>
