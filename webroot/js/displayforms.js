
/*Muestra un nuevo form para agregar otra entidad educacion*/
function agregarEducacion()
{
	 var x = document.getElementById("educacion1");
	 var y = document.getElementById("educacion2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        if(y.style.display === "none")
		    y.style.display = "block";
    } 	
}


function agregarExperiencia()
{
	 var x = document.getElementById("experiencia1");
	 var y = document.getElementById("experiencia2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        if(y.style.display === "none")
		   y.style.display = "block";
    }   		
}

function agregarExperiencia1()
{
	 var x = document.getElementById("experiencia0");
    if (x.style.display === "none") {
        x.style.display = "block";
    } 
}

function eliminarExperiencia()
{
	 var x = document.getElementById("experiencia1");
	 var y = document.getElementById("experiencia2");
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        if(x.style.display === "block")
		   x.style.display = "none";
    } 		
}


function agregarIdioma()
{
	 var x = document.getElementById("idioma1");
	 var y = document.getElementById("idioma2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        if(y.style.display === "none")
		   y.style.display = "block";
    } 		
}

function agregarOtroTrabajov()
{
	 var x = document.getElementById("otroTrabajo1");
	 var y = document.getElementById("otroTrabajo2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        if(y.style.display === "none")
		   y.style.display = "block";
    } 		
}

function agregarOtroTrabajo()
{
	 var x = document.getElementById("oj11");
	 var y = document.getElementById("oj12");
	 var z = document.getElementById("oj13");
	   
	    if (x.type === "hidden") {
        x.type = "visible";
		y.type = "visible";
		z.type = "visible";
    } else {
         
    } 	
	   
    	
}
