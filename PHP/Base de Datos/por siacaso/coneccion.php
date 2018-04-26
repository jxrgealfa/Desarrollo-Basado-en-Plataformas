<?php
    $usuario = "root";
    $contrasena = "";
    $servidor = "localhost";
    $basededatos = "ucsp";
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    echo "<table borde='2'>";
    echo "<tr>";
    echo "<th>Codigo</th>";
    echo "<th>Nombre</th>";
    echo "</tr>";

    while ($columna = mysqli_fetch_array( $resultado )){
        echo "<tr>";
        echo "<td>" . $columna['codigo'] . "</td><td>" . $columna['nombre'] . "</td>";
        echo "</tr>";
    }

    echo "</table>"; 
    mysqli_close( $conexion );
?>
