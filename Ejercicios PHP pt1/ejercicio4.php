<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>

</head>
<body>
	<form action="" method="post">
		<label for="">Edad 1:</label>
		<input type="text" name="age1" value="">
		<br>
		<label for="">Edad 2:</label>
		<input type="text" name="age2">
		<br>
		<label for="">Edad 3:</label>
		<input type="text" name="age3">
		<br>
		<input type="submit" value="Enviar">
	</form>

	<?php 
		if (isset($_POST['age1']) && isset($_POST['age2']) && isset($_POST['age3'])) {
			if (is_numeric($_POST['age1']) && is_numeric($_POST['age2']) && is_numeric($_POST['age3'])) {
				

				//Edad mínima
				if ($_POST['age1'] < $_POST['age2']) {
					if ($_POST['age1'] < $_POST['age3']) {
						$min = $_POST['age1'];
					}else {
						$min = $_POST['age3'];
					}
				}else if ($_POST['age2'] < $_POST['age3']) {
					$min = $_POST['age2'];
				}else {
					$min = $_POST['age3'];
				}

				//Edad máxima
				if ($_POST['age1'] > $_POST['age2']) {
					if ($_POST['age1'] > $_POST['age3']) {
						$max = $_POST['age1'];
					}else {
						$max = $_POST['age3'];
					}
				}else if ($_POST['age2'] > $_POST['age3']) {
					$max = $_POST['age2'];
				}else {
					$max = $_POST['age3'];
				}

				echo "<p>Edad mínima: ".$min."</p>";
				echo "<p>Edad máxima: ".$max."</p>";

				$media = ($_POST['age1'] + $_POST['age2'] + $_POST['age3']) / 3;
				echo "<p>Edad media: ".$media."</p>";
			}else {
				echo "Introduce tres números";
			}
		}
		

	 ?>
</body>
</html>