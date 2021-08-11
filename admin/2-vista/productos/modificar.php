<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar un Nuevo Cliente</title>
    
    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" class="text">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
            /*session_start();*/
            include('../sideBar.php');
            include('../topBar.php');
        ?>
        
        <!-- Begin Page Content -->
        <div class="container col-lg-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Modifique el Producto!</h1>
                                    <br />
                                </div>
                                <?php
                                    $id=$_GET['id'];
                                    $case="idProducto";
                                    include ('../../3-control/crudProductos/buscar.php');
                                    $row=mysqli_fetch_row($query5);
                                    echo $consulta5;
                                ?>
                                <form class="user" action="../../3-control/crudProductos/funciones.php" method="POST">
                                    <div class="row mb-4">
                                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input type="hidden" name="id" value="<?=$row[0]?>">
                                                    <input type="text" name="nombre" class="form-control form-control-user" id="exampleFirstName" maxlength="20" placeholder="Escriba el nombre del producto *" value="<?=$row[1]?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <textarea name="descripcion" rows="3" cols="50" placeholder="Escriba la descripción del producto (100 caracteres máximo)" maxlength="100"><?=$row[2]?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <select name="tipo">
                                                        <?php
                                                            $case="tipo";
                                                            include ('../../3-control/crudProductos/buscar.php');
                                                            echo $consulta2;
                                                            while($tipo=mysqli_fetch_row($query2)){
                                                                if ($tipo[0]==$row[3]){
                                                        ?>
                                                                <option value="<?=$tipo[0]?>" selected><?=$tipo[1]?></option>
                                                        <?php
                                                                }else{
                                                                    ?>
                                                                <option value="<?=$tipo[0]?>"><?=$tipo[1]?></option>
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input type="number" name="precio" class="form-control form-control-user" id="exampleInputPassword" placeholder="Escriba el precio *" value="<?=$row[4]?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="action" value="Modificar" />
                                </form>
                                <br />
                                <hr>
                                <br />
                                <hr>
                                <div class="text-center">
                                    <br />
                                    <!--<a class="small" href="forgot-password.html">Forgot Password?</a>-->
                                </div>
                                <div class="text-center">
                                    <a class="small" href="./login.php">Ya tiene una cuenta? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/htmlclassb/admin/2-vista/logoutModal.php";
        include($path);
    ?>
</body>

</html>