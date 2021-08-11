<?php
    $pathConex = $_SERVER['DOCUMENT_ROOT'];
    $pathConex .= "/cantinachichilo/admin/1-model/conex.php";
    include ($pathConex);
    switch ($case){
        case 'todos':
            $consulta1="SELECT * FROM productos";
            $query1 = $con->query($consulta1);
            $cont1=mysqli_num_rows($query1);
        break;
        case 'idProducto':
            $consulta5="SELECT * FROM productos WHERE id = ".$id;
            $query5 = $con->query($consulta5);
            $cont5=mysqli_num_rows($query5);
        break;
        case 'id':
            $consulta2="SELECT * FROM productos WHERE tipo = ".$tipo;
            $query2 = $con->query($consulta2);
            $cont2=mysqli_num_rows($query2);
        break;
        case 'tipo':
            $consulta2="SELECT * FROM tipoproductos";
            $query2 = $con->query($consulta2);
            $cont2=mysqli_num_rows($query2);
        break;
        case 'porTipo':
            $consulta6="SELECT productos.id, productos.nombre, productos.descripcion, tipoproductos.nombre, productos.precio FROM productos
                        INNER JOIN tipoproductos
                        ON productos.tipo=tipoproductos.id";
            $query6=$con->query($consulta6);
    }
?>