<?php

    include 'config.php'; //incluimos nuestro archivo config

    $id=$_GET['id'];											// Aqui obtenemos el id del evento
    $de=$conexion->query("SELECT * FROM eventos WHERE id=$id"); // y lo buscames en la base de dato
    $row=$de->fetch_assoc();									// para buscar  y mostrar su
    $titulo=$row['title'];									    // titulo y
    $evento=$row['body'];									    // cuerpo


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$titulo?></title>
</head>
<body>
	 <h3><?=$titulo?></h3>
	 <hr>
 	<p><?=$evento?></p>
</body>
</html>