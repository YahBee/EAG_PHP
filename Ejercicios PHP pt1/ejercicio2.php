<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>

</head>
<body>
	<form action="" method="post">
		<label for="">Nombre:</label>
		<input type="text" name="name" value="">
		<br>
		<label for="">Primer apellido:</label>
		<input type="text" name="lastname1">
		<br>
		<label for="">Segundo apellido:</label>
		<input type="text" name="lastname2">
		<br>
		<input type="submit" value="Enviar">
	</form>

	<?php 
		if (!empty($_POST['name']) && !empty($_POST['lastname1']) && !empty($_POST['lastname2'])) {
			echo "<p>".ucfirst($_POST['name'])." ".ucfirst($_POST['lastname1'])." ".ucfirst($_POST['lastname2'])."</p>";
		}else {
			echo "Introduce tu nombre completo";
		}
	 ?>
</body>
</html>