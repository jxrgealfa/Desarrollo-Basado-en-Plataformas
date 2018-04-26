<?php 

require "coneccion.php";
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