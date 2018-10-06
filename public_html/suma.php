/es/admin/content#main-content<html>
<head>
	<title>Suma de Dos Numeros</title>
<head>
<body>
	<h2> Operacion de Suma de dos valores</h2>
	<form method="post" action="">
		Ingrese el primer valor:<br>
		<input type="text" name="numero1"><br>
		Ingrese el segundo valor:<br>
		<input type="text" name="numero2"><br>
		<input type="submit" name="sumar" value="Total"><br>
	</form>
</body>
	<?php
		$numero1= $_POST['numero1'];
		$numero2= $_POST['numero2'];

		$suma= $numero1 + $numero2;

		echo 'La suma de '.$numero1.' mas '.$numero2.' es igual a : '.$suma;
	?>

	 <A HREF="http://misitio1.com/index.html" TARGET=""><p>Regresar al Menu</p><br>
	


</html>
