<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path1=$path."/cantinachichilo/admin/";
    $_SESSION['path'] = $path1;
    $pathCrear = "/cantinachichilo/admin/2-vista/crudUsuario/insertar.html";
    $pathVer = "/cantinachichilo/admin/3-control/clientesVer.php";
    $pathPerfiles="/cantinachichilo/admin/2-vista/crudPerfiles/";
    $pathProductos="/cantinachichilo/admin/2-vista/productos/";
    $pathPerfilesxUsuario="/cantinachichilo/admin/2-vista/crudPerfilesxUsuario/";
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/cantinachichilo/admin/index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/cantinachichilo/index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    MENÚ
</div>

<!-- Nav Item - Pages Collapse Menu -->

<?php
    $path .= "/cantinachichilo/admin/1-model/conex.php";
    include($path);
    $consulta="SELECT * FROM usuarioxperfil WHERE idUsuario='".$_SESSION['id']."' AND idPerfil=2";
    $query=$con->query($consulta);
    $cont=mysqli_num_rows($query);
    if ($cont=='1'){
        echo '
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>CRUDs</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Usuarios</h6>
                        <a class="collapse-item" href="'.$pathCrear.'">Crear Usuario</a>
                        <a class="collapse-item" href="'.$pathVer.'">Ver Usuarios</a>
                    </div>
                </div>
            </li>
        ';
    }
echo '
    <!-- Nav Item - Utilities Collapse Menu -->
';
$consulta="SELECT * FROM usuarioxperfil WHERE idUsuario='".$_SESSION['id']."' AND idPerfil=2";
    $query=$con->query($consulta);
    $cont=mysqli_num_rows($query);
    if ($cont=='1'){
        echo '
            <li class="nav-item">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perfiles</h6>
                        <a class="collapse-item" href="'.$pathPerfiles.'perfilesInsertar.php">Crear Perfiles</a>
                        <a class="collapse-item" href="'.$pathPerfiles.'borrar.php">Borrar Perfiles</a>
                    </div>
                </div>
            </li>
        ';
    }
echo '
    <!-- Nav Item - Utilities Collapse Menu -->
';
    $consulta="SELECT * FROM usuarioxperfil WHERE idUsuario='".$_SESSION['id']."' AND idPerfil=2";
    $query=$con->query($consulta);
    $cont=mysqli_num_rows($query);
    if ($cont=='1'){
        echo '
            <li class="nav-item">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perfiles por Usuario</h6>
                        <a class="collapse-item" href="'.$pathPerfilesxUsuario.'modificar.php">Modificar</a>
                        <a class="collapse-item" href="'.$pathPerfiles.'borrar.php"></a>
                    </div>
                </div>
            </li>
        ';
    }
echo '
    <!-- Nav Item - Utilities Collapse Menu PERMISOS-->
';
    $consulta="SELECT * FROM usuarioxperfil WHERE idUsuario='".$_SESSION['id']."' AND idPerfil=2";
    $query=$con->query($consulta);
    $cont=mysqli_num_rows($query);
    if ($cont=='1'){
        echo '
            <li class="nav-item">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Permisos por Perfil</h6>
                        <a class="collapse-item" href="'.$pathPerfilesxUsuario.'modificar.php">Modificar</a>
                        <a class="collapse-item" href="'.$pathPerfiles.'borrar.php"></a>
                    </div>
                </div>
            </li>
        ';
    }
?>
<!-- Nav Item - Utilities Collapse Menu PRODUCTOS-->
<?php
    $consulta="SELECT * FROM usuarioxperfil WHERE idUsuario='".$_SESSION['id']."' AND idPerfil=2";
    $query=$con->query($consulta);
    $cont=mysqli_num_rows($query);
    if ($cont=='1'){
?>
        <li class="nav-item">
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Productos</h6>
                    <a class="collapse-item" href="/cantinachichilo/admin/2-vista/productos/agregar.php">Agregar</a>
                    <a class="collapse-item" href="/cantinachichilo/admin/2-vista/productos/ver.php">ver</a>
                </div>
            </div>
        </li>
<?php
    }
?>








<!--<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    <!-- Addons-->
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
    <!--<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item active" href="<?=$path?>">404 Page</a>
            <a class="collapse-item" href="/cantinachichilo/admin/2-vista/topBar.php">Blank Page</a>
        </div>
    </div>-->
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <!--<a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>-->
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <!--<a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>-->
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
   <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button>-->
</div>

</ul>
<!-- End of Sidebar mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!-- End of Sidebar mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->