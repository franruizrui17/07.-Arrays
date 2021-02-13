<!DOCTYPE html>

<html>

<head>

<title>Formulario Array03</title>


</head>

<body>
Crea un array con los meses del año y 
muestra el que te indique el usuario a través de un formulario con un campo de tipo select<p>
<form> 
 
Tu mes favorito es: <br> 
    <select name="mes" id="mes" onchange="calcular();"> 
       <option >1</option> 
       <option >2</option> 
       <option >3</option> 
       <option >4</option> 
       <option >5</option> 
       <option >6</option> 
       <option >7</option> 
       <option >8</option> 
       <option >9</option> 
       <option >10</option> 
       <option >11</option> 
       <option >12</option> 	   
    </select><br> 
    <input type="submit" value="Enviar datos!" >
	
</form> 


</body>

</html>

<?php 
 
 $meses=['Enero<br>',
		'Febrero<br>',
		'Marzo<br>',
		'Abril<br>',
		'Mayo<br>',
		'Junio<br>',
		'Julio<br>',
		'Agosto<br>',
		'Septiembre<br>',
		'Octubre<br>',
		'Noviembre<br>',
		'Diciembre<br>'
];
 
 $mes=$_GET["mes"]-1; 

      	echo "Tu mes favorito del año es " . ": " . $meses[$mes]; 

    
?>

<div id="resultado" style="background-color:pink"></div>


<script>

function calcular () {
	
meses=[	'Enero<br>',
		'Febrero<br>',
		'Marzo<br>',
		'Abril<br>',
		'Mayo<br>',
		'Junio<br>',
		'Julio<br>',
		'Agosto<br>',
		'Septiembre<br>',
		'Octubre<br>',
		'Noviembre<br>',
		'Diciembre<br>'
];


	document.getElementById('resultado').innerHTML="Tu mes favorito del año es: " + meses[
	document.getElementById('mes').value-(1)
	] +"<br>";

}

calcular();

</script>
