<?php
error_reporting(0);
function factorial($numero)
{
    if($numero >= 2){
        return ($numero * factorial($numero - 1));
    }else{
        return true;
    }
}
if($_POST["enviar"] == "Calcular")
{
	 
	$numero = $_POST["numero"];
	
	echo 'el factorial de $numero es '.factorial($numero);
}
?>
<html>
	<head>
		<title>
		Ejercicio factorial
		</title>
	</head>
	<body>
	
		<form id="frmFactorial" name="frmFactorial" action="prueba_1.php" method="get" >
		
			Ingrese el numero del que quiere obtener factorial: <input type="text" name="numero" id="numero" value="" >
			<br><br>
			<input type="button" name="enviar" id="enviar" value="Calcular">
		
		</form>
		
	</body>
</html>
