<?php

    include 'config.php'; //incluimos nuestro archivo config

    $id=$_GET['id'];											// Aqui obtenemos el id del evento
    $de=$conexion->query("SELECT * FROM eventos WHERE id=$id"); // y lo buscames en la base de dato
    $row=$de->fetch_assoc();									// para buscar  y mostrar su
    $titulo=$row['title'];									    // titulo y
    $evento=$row['body'];									    // cuerpo

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id=$_GET['id'];
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}
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
<form action="" method="post">
    <button type="submit" class="btn btn-danger" name="eliminar_evento">Eliminar</button>
</form>
</html>
