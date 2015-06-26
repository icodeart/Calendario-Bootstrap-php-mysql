<?php

	include 'config.php'; // Incluimos nuestro archivo config

    $sql="SELECT * FROM eventos"; // Sentencia sql para traer los eventos desde la base de datos

    if ($conexion->query($sql)->num_rows) { // Verificamos si existe un dato

        $datos = array(); // creamos un array


        $i=0; //guardamos en un array multidimensional todos los datos de la consulta

        $e = $conexion->query($sql); // Ejecutamos nuestra sentencia sql

        while($row=$e->fetch_array()) // realizamos un ciclo while para traer los eventos encontrados en la base de dato
        {
            $datos[$i] = $row; // Alimentamos el array con los datos de los eventos
            $i++;
        }

        echo json_encode(               //
                array(                  //    Aqui transformamos los datos
                    "success" => 1,     //    encontrados en la base de datos
                    "result" => $datos  //    al formato json
                )                       //
            );

    }else{
        echo "No hay datos"; // Si no existen eventos mostramos este mensaje.
    }


?>