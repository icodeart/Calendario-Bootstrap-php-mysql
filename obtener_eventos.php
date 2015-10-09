<?php

// Incluimos nuestro archivo config
include 'config.php'; 

// Sentencia sql para traer los eventos desde la base de datos
$sql="SELECT * FROM eventos"; 

// Verificamos si existe un dato
if ($conexion->query($sql)->num_rows)
{ 

    // creamos un array
    $datos = array(); 

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0; 

    // Ejecutamos nuestra sentencia sql
    $e = $conexion->query($sql); 

    while($row=$e->fetch_array()) // realizamos un ciclo while para traer los eventos encontrados en la base de dato
    {
        // Alimentamos el array con los datos de los eventos
        $datos[$i] = $row; 
        $i++;
    }

    // Transformamos los datos encontrado en la BD al formato JSON
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        // Si no existen eventos mostramos este mensaje.
        echo "No hay datos"; 
    }


?>
