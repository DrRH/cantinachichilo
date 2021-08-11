<?php
#Parámetros de conexión a la base de datos del aplicativo
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="chichilo";
if(!($con = new mysqli($host, $user, $password, $dbname, $port, $socket))){
    die ("No se puede conectar a la Base de Datos." .mysqli_connect_error());
    }else{ 
      /*$msj="Conectado a la base de datos Exitosamente <h2>Bienvenido</h2>";*/
    }
    //echo "<br /><br /><br /><p><a href='../index.html'>Inicio</a></p>";
?>