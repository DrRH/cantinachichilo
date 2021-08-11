<?php
    $pathConex = $_SERVER['DOCUMENT_ROOT'];
    $pathConex .= "/cantinachichilo/admin/1-model/conex.php";
    include ($pathConex);
    switch ($case){
        case 'descripcion':
            $consulta="INSERT INTO productos (descripcion) VALUES ('".$descripcion."')";
            $query=$con->query($consulta);
        break;
        case 'buscar':
            $consulta="INSERT INTO perfiles (descripcion) VALUES ('".$descripcion."')";
            $query=$con->query($consulta);
        break;
        case 'nuevoProducto':
            $consulta="INSERT INTO productos (nombre, descripcion, tipo, precio) VALUES ('".$nombre."', '".$descripcion."', '".$tipo."', ".$precio.")";
            $query=$con->query($consulta);
        break;
    }
?>