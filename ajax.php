<?php
//script que implementa el AJAX
require "conexBD.php";//solicita al otro script

$resultadoBD = mysqli_query($conexion, "SELECT * FROM datos");//consulta sql

$usuariosBD = "";//,muestra la tabla en la pantalla

$usuariosBD .= "<table>";
$usuariosBD .= "<tr>";

$usuariosBD .= "<th>Nombres</th>";//cabezeras de las tablas
$usuariosBD .= "<th>Correos</th>";
$usuariosBD .= "<th>Edades</th>";
$usuariosBD .= "</tr>";

while ($fila = mysqli_fetch_assoc($resultadoBD)) {
    $usuariosBD .= "<tr>";//pone los datos de la base de datos en una tablas
    $usuariosBD .= "<td>". $fila['Nombre']."</td>";
    $usuariosBD .= "<td>". $fila['Correo']."</td>";//datos en orden
    $usuariosBD .= "<td>". $fila['Edad']."</td>";
    $usuariosBD .= "</tr>";
    
}

$usuariosBD .= "</table>";//cierra la tabla

echo $usuariosBD;

$close= mysqli_close($conexion);//cierra la conexion a la base de datos


?>