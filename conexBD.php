<?php
//scrpit de conexion a la base de datos 

$m_host = 'db.inf.uct.cl';//host
$m_user = 'A2022_emariqueo';//usuario
$m_password = 'A2022_emariqueo';//contraseña
$m_BD = 'A2022_emariqueo';//base de datos a acceder

//conexion con mysqli_connect 
$conexion = mysqli_connect($m_host, $m_user, $m_password, $m_BD);

//mensaje de comprovacion
if (mysqli_connect_errno()) {
    echo "Error de Conexion: " . mysqli_connect_error();
}
?>