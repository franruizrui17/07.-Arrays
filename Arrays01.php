<center>
<div style="border: 1px solid blue;">

Crea un array con el nombre de tus compañeros, en qué puesto se sienta y reubícalos por su nombre de pila
mostrando ambas tablas<p>

<?php

$alumnos =[
	'Andres Q<br>',
	'Sergio D.<br>',
	'Andres D.<br>',
	'Ivan<br>',
	'Pablo E.<br>',
	'Hector<br>',
	'Alberto<br>',
	'Eduardo<br>',
	'Jaury<br>',
	'Pablo R.<br>',
	'Sergio R.<br>'];


	for($i=1; $i<10; $i++ )
	
		echo $i.$alumnos[$i-1].'<br>';
		
	sort($alumnos);
	
		echo $i.$alumnos[$i-1].'<br>';
	


?>
</div>

<div style="border: 1px solid red;">

<div id="01"></div>
<div id="02"></div>
<div id="03"></div>
<div id="04"></div>
<div id="05"></div>
<div id="06"></div>
<div id="07"></div>
<div id="08"></div>
<div id="09"></div>
<div id="10"></div>

<script>

alumnos =[
	'Andres Q<br>',
	'Sergio D.<br>',
	'Andres D.<br>',
	'Ivan<br>',
	'Pablo E.<br>',
	'Hector<br>',
	'Alberto<br>',
	'Eduardo<br>',
	'Jaury<br>',
	'Pablo R.<br>',
	'Sergio R.<br>'];
	
alumnos.sort(function(a,b){return 0.5 - Math.random()});

if(true) {
	document.getElementById('01').innerHTML="01" + alumnos[0] +"<br>";
	document.getElementById('02').innerHTML="02" + alumnos[1] +"<br>";
	document.getElementById('03').innerHTML="03" + alumnos[2] +"<br>";
	document.getElementById('04').innerHTML="04" + alumnos[3] +"<br>";
	document.getElementById('05').innerHTML="05" + alumnos[4] +"<br>";
	document.getElementById('06').innerHTML="06" + alumnos[5] +"<br>";
	document.getElementById('07').innerHTML="07" + alumnos[6] +"<br>";
	document.getElementById('08').innerHTML="08" + alumnos[7] +"<br>";
	document.getElementById('09').innerHTML="09" + alumnos[8] +"<br>";
	document.getElementById('10').innerHTML="10" + alumnos[9] +"<br>";
}

</script>