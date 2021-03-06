<?php
    function insertar(){
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];
        $case="nuevoProducto";
        include('../../3-control/crudProductos/insertar.php');
        if(isset($query)){
            echo '
                <!DOCTYPE html>
                <html lang="es">

                <head>

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>Insertar Productos</title>

                    <!-- Custom fonts for this template-->
                    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                    <!-- Custom styles for this template-->
                    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

                </head>

                <body class="bg-gradient-primary">

                    <div class="container">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Hecho!</h1>
                                                <br />
                                            </div>
            ';
            Echo 'El producto: '.$nombre.' ha sido agregado correctamente a la base de datos.';
            echo '
                <div class="text-center">
                    <a class="small" href="../../2-vista/productos/agregar.php">Agregar otro producto</a>
                </div>
                <div class="text-center">
                    <a class="small" href="../../index.php">Volver a la consola de administraci??n</a>
                </div>
            ';
        }
    }
    function modificar(){
        include ('../../1-model/conex.php');
        $consulta="UPDATE productos SET nombre='".$_POST['nombre']."', descripcion ='".$_POST['descripcion']."', tipo='".$_POST['tipo']."', precio=".$_POST['precio']." WHERE id=".$_POST['id'];
        $query = $con->query($consulta);
        header ('Location: ../../2-vista/productos/ver.php');
    }
    function borrar(){
        $a=$_POST['id'];
        include ('../../1-model/conex.php');
        $consulta="DELETE FROM productos WHERE id=".$a;
        $query = $con->query($consulta);
        header ('Location: ../../2-vista/productos/ver.php');
    }
echo'est?? en funciones, ';
    $action = '';
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'Agregar' : 
                insertar();
            break;
            case 'Modificar' :
                modificar();
            break;
            case 'Borrar' :
                borrar();
            break;
        }
    }
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Custom scripts for register page-->
    <script src="../js/js.js"></script>

</body>

</html>