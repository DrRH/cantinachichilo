<?php
    $pathConex = $_SERVER['DOCUMENT_ROOT'];
    $pathConex .= "/cantinachichilo/admin/1-model/conex.php";
    include ($pathConex);
    switch ($case){
        case 'descripción':
            $consulta="UPDATE productos SET descripcion ='".$row[2]."' WHERE id=".$row[0];
            $query = $con->query($consulta);
        break;
    }
?>