<?php
    session_start();
    //$_SESSION['path']=$_SERVER['DOCUMENT_ROOT'];
    //$_SESSION['path'].='/cantinachichilo/admin/';
    $_SESSION['path']='cantinachichilo.herokuapp.com/admin/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/chichilo-logo.png" type="favicon/ico" />

    <title>Cantina Chichilo de Bs As</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/main.css">


    <script src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(24.909439, 91.833800),
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(24.909439, 91.833800),
                title: "Mamma's Kitchen Restaurant"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body data-spy="scroll" data-target="#template-navbar">

<!--== 4. Navigation =================================================================================================================================================================
===================================================================================================================================================================================-->
    <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
        <div>
            <marquee class="marquee" behavior="scroll" bgcolor="#FF0000" align="middle" scrolldelay="60">
            <a href="images/menu-gallery/menu1.png">*MONDONGO A LA ITALIANA*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*CALAMARETTIS A LA SCARPETTA*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*RABAS A LA CALABRIA* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*TALLARINES CON SARDICHELLAS CALABRESAS*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*FUSILES
                CON BROCOLIS, ANCHOAS, GARBANZOS Y HONGOS*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*CARACOLES A LA BORDALEZA*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*TRUCHA AL AJILLO*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="images/menu-gallery/menu1.png">*TIRAMISU CALABRES*</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </marquee>
        </div>
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="#">
                    <img id="logo" src="images/chichilo-logo.png" class="logo img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="Food-fair-toggle">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="a-red">Nosotros</a></li>
                    <li><a href="#pricing" class="a-red">Precios</a></li>
                    <li><a href="#great-place-to-enjoy" class="a-red">Cervezas</a></li>
                    <li><a href="#breakfast" class="a-red">Panes</a></li>
                    <li><a href="#featured-dish" class="a-red">Destacados</a></li>
                    <li><a href="#reserve" class="a-red">Reservaciones</a></li>
                    <li><a href="#contact" class="a-red">contactanos</a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="./admin/index.php" class="a-red">Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.row -->
    </nav>


<!--== 5. Header =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="header-slider" class="owl-carousel">
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">BEST FOOD</h1>
                    <p class="header-sub-title">create your own slogan</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">BEST SNACKS</h1>
                    <p class="header-sub-title">create your own slogan</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="header-content text-right pull-right">
                    <h1 class="header-title">BEST DRINKS</h1>
                    <p class="header-sub-title">create your own slogan</p>
                </div>
                <!-- /.header-content -->
            </div>
        </div>
    </section>



<!--== 6. About us =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="about" class="about">
        <img src="images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">Acerca de Nosotros</h2>
                            <p class="section-content-para">
                                Camarones y Terrero. La esquina que hospeda una de las cantinas más tradicionales de la ciudad. Un lugar que supo transmitir la esencia del sabor ítalo-porteño-calabrés a cuatro generaciones de comensales. En este tiempo los cambios al menú fueron los
                                estrictamente necesarios. En pocas palabras: muy pocos. Lo que no se movió fue la mística del local. El tiempo habrá desgastado techo, paredes, mostrador, mesas y sillas pero la energía de la familia y la potencia de los
                                platos parecen intactos.
                            </p>
                            <p class="section-content-para">
                                Es uno de los pocos lugares donde se pueden comer sesos, caracoles, manitas de cerdo, ranas, sardicelle (sardinas neonatas conservadas en aceite de oliva y condimentadas con ají picante típicas de Calabria) y otros ingredientes suculentos casi desconocidos
                                por la mayoría.
                            </p>
                            <p class="section-content-para">
                                Pietro Sorba
                                <br /> 26/11/2017 0:30 | Clarín.com Viva Actualizado | al 27/11/2017 17:20
                            </p>
                        </div>
                        <!-- /.section-content -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#about -->


<!--==  7. Afordable Pricing =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="pricing" class="pricing">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-header">
                                    <br />
                                    <br />
                                    <h2 class="pricing-title">Precios Especiales</h2>
                                    <ul id="filter-list" class="clearfix">
                                        <li class="filter" data-filter="all">Todos</li>
                                        <li class="filter" data-filter=".breakfast">Desayuno</li>
                                        <li class="filter" data-filter=".special">Especial</li>
                                        <li class="filter" data-filter=".desert">Light</li>
                                        <li class="filter" data-filter=".dinner">Cena</li>
                                    </ul>
                                    <!-- @end #filter-list -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <ul id="menu-pricing" class="menu-price">
                            <li class="item dinner">

                                <a href="#">
                                    <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc text-center">
                                        <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$20</h2>
                            </li>

                            <li class="item breakfast">

                                <a href="#">
                                    <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$20</h2>
                            </li>
                            <li class="item desert">

                                <a href="#">
                                    <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$18</h2>
                            </li>
                            <li class="item breakfast special">

                                <a href="#">
                                    <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$15</h2>
                            </li>
                            <li class="item breakfast">

                                <a href="#">
                                    <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$20</h2>
                            </li>
                            <li class="item dinner special">

                                <a href="#">
                                    <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$22</h2>
                            </li>
                            <li class="item desert">

                                <a href="#">
                                    <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$32</h2>
                            </li>
                            <li class="item dinner">

                                <a href="#">
                                    <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$38</h2>
                            </li>
                            <li class="item desert special">

                                <a href="#">
                                    <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                    <div class="menu-desc">
                                        <span>
                                                <h3>Crema Helada</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                    </div>
                                </a>

                                <h2 class="white">$38</h2>
                            </li>
                        </ul>

                        <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                    </div>
                </div>
            </div>

        </div>
    </section>


<!--== 8. Great Place to enjoy =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="great-place-to-enjoy" class="great-place-to-enjoy">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Un Gran Lugar Para Disfrutar</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div>
                <!-- /.dis-table -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#great-place-to-enjoy -->



<!--==  9. Our Beer =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="beer" class="beer">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_color.png">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                </div>

                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">Nuestra Cerveza</h2>
                        <div class="section-description">
                            <p class="section-content-para">
                                Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished
                                in size.
                            </p>
                            <p class="section-content-para">
                                beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy
                                compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away,
                                it [the Earth] diminished in size.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!--== 10. Our Breakfast Menu =================================================================================================================================================================
============================================================================================================================================================================================-->
    <section id="breakfast" class="breakfast">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Explosión de sabor en tu boca.</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div>
                <!-- /.dis-table -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#breakfast -->



<!--== 11. Our Bread =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="bread" class="bread">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_color.png">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                </div>
                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">
                            Nuestro Pan
                        </h2>
                        <div class="section-description">
                            <p class="section-content-para">
                                La astronomía obliga al alma a mirar hacia arriba, y nos lleva de este mundo a otro. Es curioso que pasemos más tiempo felicitando a las personas que han triunfado que animando a las que no lo han hecho. A medida que nos alejamos más y más, [la Tierra]
                                disminuye en tamaño.
                            </p>
                            <p class="section-content-para">
                                objeto bello, cálido y vivo parecía tan frágil, tan delicado, que si lo tocabas con un dedo se desmoronaba y se deshacía. Ver esto tiene que cambiar a un hombre. Donde la ignorancia acecha, también lo hacen las fronteras del descubrimiento y la imaginación.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!--== 12. Our Featured Dishes Menu ===========================================================================================================================================================
============================================================================================================================================================================================-->
    <section id="featured-dish" class="featured-dish">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Nuestro Menú de Platos Destacados</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div>
                <!-- /.dis-table -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#featured-dish -->




<!--== 13. Menu List =================================================================================================================================================================
====================================================================================================================================================================================-->
    <section id="menu-list" class="menu-list">
        <div class="container">
            <div class="row menu">
                <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-catagory">
                                    <h2>Panes</h2>
                                </div>
                            </div>
                            <?php
                                include ($_SESSION['path'].'/admin/3-control/funciones/producto.php');
                                insertar(6);
                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-catagory">
                                    <h2>Bebidas</h2>
                                </div>
                            </div>
                            <?php
                                insertar(2);
                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-catagory">
                                    <h2>Carnes</h2>
                                </div>
                            </div>
                            <?php
                                insertar(3);
                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-catagory">
                                    <h2>Ración</h2>
                                </div>
                            </div>
                            <?php
                                insertar(1);
                            ?>
                        </div>
                    </div>
                    <div id="moreMenuContent"></div>
                    <div class="text-center">
                        <a id="loadMenuContent" class="btn btn-middle hidden-sm hidden-xs">Ver Más<span class="caret"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!--== 14. Have a look to our dishes =================================================================================================================================================
===================================================================================================================================================================================-->

    <section id="have-a-look" class="have-a-look hidden-xs">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/food_color.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">

                    <div class="menu-gallery" style="width: 50%; float:left;">
                        <div class="flexslider-container">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/menu-gallery/menu1.png" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu2.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu3.png" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu4.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu5.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu6.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu7.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu8.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu9.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu10.jpg" />
                                    </li>
                                    <li>
                                        <img src="images/menu-gallery/menu11.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                        <h2 class="section-title">Dale una mirada a nuestros platos</h2>
                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.wrapper -->
    </section>




<!--== 15. Reserve A Table! =================================================================================================================================================================
===================================================================================================================================================================================-->
    <section id="reserve" class="reserve">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_black.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Reserve Una Mesa !</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                    </div>
                </div>
                <!-- /.dis-table -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#reserve -->



    <section class="reservation">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_color.png">
        <div class="wrapper">
            <div class="container-fluid">
                <div class=" section-content">
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <form class="reservation-form" method="post" action="reserve.php">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-md-2 hidden-sm hidden-xs"></div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="opening-time">
                                <h3 class="opening-time-title">Hours</h3>
                                <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                <div class="launch">
                                    <h4>Lunch</h4>
                                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                </div>

                                <div class="dinner">
                                    <h4>Dinner</h4>
                                    <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                    <p>Sun: 5:30 PM - 12:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell">
                    <br />
                    <br />
                    <h2 class="section-title">Estamos Aquí</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <br />
                        <br />
                        <p>Camarones 1901 Esquina Terrero<br />2006 (1416)</p>
                        <p>CAPITAL FEDERAL <br /> REPUBLICA ARGENTINA</p>
                        <p>+11 4581 1984<br />+11 4584 1263</p>
                        <p>chichilo3554@hotmail.com</p>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
            <div class="social-media">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="center-block">
                            <li>
                                <a href="#" class="fb"></a>
                            </li>
                            <li>
                                <a href="#" class="twit"></a>
                            </li>
                            <li>
                                <a href="#" class="g-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="link"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/cantinachichilo/?hl=es-la" class="insta"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div id="map-canvas"></div>
        </div>
    </div>



    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <form class="contact-form" method="post" action="contact.php">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="name" required="required" placeholder="  Nombre">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Asunto">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Mensaje"></textarea>
                            </div>

                            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-send">Enviar </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="copyright text-center">
                    <hr>
                        <p>
                            *** 1956 - 2021 ***
                        </p>
                        <p>
                            &copy; Copyright, 2021 <a class="a-green" href="#">DrRH.site</a> Theme by <a href="http://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
    <script src="js/script.js"></script>


</body>

</html>