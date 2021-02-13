<html>

<head>

<title>Formulario Array02</title>


</head>

<body>
Crea un array con los días de la semana y 
muestra el que te indique el usuario a través de un formulario con un campo de tipo select<p>
<form> 
 
Tu dia favorito de la semana es: <br> 
    <select name="dia" id="dia" onchange="calcular();"> 
       <option >1</option> 
       <option >2</option> 
       <option >3</option> 
       <option >4</option> 
       <option >5</option> 
       <option >6</option> 
       <option >7</option> 
    </select><br> 
    <input type="submit" value="Enviar datos!" >
	
</form> 


</body>

</html>

<?php 
 
 $semana=['Lunes<br>',
		'Martes<br>',
		'Miercoles<br>',
		'Jueves<br>',
		'Viernes<br>',
		'Sabado<br>',
		'Domingo<br>'
];
 
 $dia=$_GET["dia"]-1; 

      	echo "Tu día favorito de la semana es " . ": " . $semana[$dia]; 

    
?>

<div id="resultado" style="background-color:pink"></div>


<script>

function calcular () {
	
semana=['Lunes<br>',
		'Martes<br>',
		'Miercoles<br>',
		'Jueves<br>',
		'Viernes<br>',
		'Sabado<br>',
		'Domingo<br>'
];


	document.getElementById('resultado').innerHTML="Tu día favorito de la semana es: " + semana[
	document.getElementById('dia').value-(1)
	] +"<br>";

}

calcular();

</script>
