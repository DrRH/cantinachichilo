<?php
echo 'esta es la página de conexión a la BD';
#Parámetros de conexión a la base de datos del aplicativo
$host="62.171.160.194";
$port=3306;
$socket="";
$user="Dorian_admin";
$password="Dorian_admin71707*";
$dbname="Dorian_chichilo";
if(!($con = new mysqli($host, $user, $password, $dbname, $port, $socket))){
    die ("No se puede conectar a la Base de Datos." .mysqli_connect_error());
    }else{ 
      $msj="Conectado a la base de datos Exitosamente <h2>Bienvenido</h2>";
    }
    echo "<br /><br /><br /><p><a href='../index.html'>Inicio</a></p>";
?>
