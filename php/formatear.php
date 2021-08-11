<?php
    $tipo=6;
    $case="todos";
    include ('../admin/3-control/crudProductos/buscar.php');
    $i=0;
    while ($row=mysqli_fetch_row($query1)){
        if (strlen($row[2])<100){
            $contStr=strlen($row[2]);
            for ($i=0;$i<(100-$contStr);$i++){
                $row[2] .= "&nbsp;";
            }
            $case="descripcion";
            include ('../admin/3-control/crudProductos/buscar.php');
        }
        echo $i."  ".$row[2]."<br>";
    }
?>