<?php
    function aPesos($value) {
        return '$' . number_format($value, 0);
    }
//##########################################################################################################################################################################
    function insertar($tipo){
    echo $_SESSION['path'];
    $case="id";
    include ('./admin/3-control/crudProductos/buscar.php');
    $i=0;
    while ($row=mysqli_fetch_row($query2)){
        echo 'entró al while';
        if ($i<3){
?>
        <div class="row">
            <div class="menu-item menu-item-2">
                <h3 class="menu-title"><?=$row[1]?></h3>
                <p class="menu-about descripcion"><?=$row[2]?></p>
                <div class="menu-system">
                    <div class="half">
                        <p class="per-head">
                            <span><i class="fa fa-user"></i></span>1:1
                        </p>
                    </div>
                    <div class="half">
                        <p class="price"><?=aPesos($row[4])?></p>
                    </div>
                </div>
                <div>
                    <br>
                    <hr>
                    <br>
                </div>
            </div>
        </div>
<?php
        $i++;
        }
    }
    }
//##########################################################################################################################################################################
function insertar2($tipo){
        $case="id";
        include ('../admin/3-control/crudProductos/buscar.php');
        $i=0;
        while ($rowProducto=mysqli_fetch_row($query2)){
            if ($i>2){
?>
            <div class="row">
                <div class="menu-item menu-item-2">
                    <h3 class="menu-title"><?=$rowProducto[1]?></h3>
                    <p class="menu-about descripcion"><?=$rowProducto[2]?></p>
                    <div class="menu-system">
                        <div class="half">
                            <p class="per-head">
                                <span><i class="fa fa-user"></i></span>1:1
                            </p>
                        </div>
                        <div class="half">
                            <p class="price"><?=$rowProducto[4]?></p>
                        </div>
                    </div>
                    <div>
                        <br>
                        <hr>
                        <br>
                </div>
                </div>
            </div>
<?php
            }
            $i++;
        }
}
?>

