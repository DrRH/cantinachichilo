<?php
    session_start();
    include ($_SESSION['path'].'3-control/funciones/producto.php');
?>
<div class="row">
    <div class="col-md-3">
        <?php
            insertar2(6);
        ?>
    </div>
    <div class="col-md-3">
        <?php
            insertar2(2);
        ?>
    </div>
    <div class="col-md-3">
        <?php
            insertar2(3);
        ?>
    </div>
    <div class="col-md-3">
        <?php
            insertar2(1);
        ?>
    </div>
</div>