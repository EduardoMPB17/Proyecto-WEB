<?php
//script de insercion de datos del formulario a la base de datos 
require "conexBD.php";

//Datos del formulario
$nombre = $_POST["nombre"];//con _POST trae los valores de name del formulario
$correo =  $_POST["correo"];
$edad =  $_POST["edad"];
$mensaje = $_POST["mensaje"];

//Insercion a la base de datos mediante una consulta sql
$sql = "INSERT INTO datos VALUES ('$nombre',
                                '$correo',
                                '$edad',
                                '$mensaje')";

$consulta = mysqli_query($conexion,$sql);//ejecuta la consulta

//mensaje de Comprobación
if (!$consulta) {
    echo "Error:", http_response_code(500);
}else{
    echo " Datos Ingresados Correctamente:",http_response_code(500);
}


?>