<?php
  session_start();  
  if(!$_SESSION)
  {
      header('Location:index.php');
  }
  include('page_part/datos_usuario.php');
?>
<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Empleado - Proyecto PYMES</title>
        <meta name="description" content="Build your landing page on the fly with wow builder">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="images/ufps.ico">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,400,300" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/nivo-lightbox.css">
        <link rel="stylesheet" href="css/jquery.countdown.css">
        

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="css/colors/blue.css">

        <!--<link rel="stylesheet" href="css/remodal.css">-->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!-- DARK CSS-->
        <!--        <link rel="stylesheet" href="css/dark.css">-->

        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!--<script type="text/javascript" src="http://cdn.syndication.twimg.com/widgets/timelines/569000074533814272?&amp;lang=en&amp;callback=twitterFetcher.callback&amp;suppress_response_codes=true&amp;rnd=0.0755648378864513"></script>-->
    
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
    
    </head>
    <body data-spy="scroll" data-target="#main-navbar">



        <div id="page" class="page">
            <!-- MENU Section-->
            
            <header>
                <nav class="navbar fixed-nav navbar-default  navbar-fixed-top" id="main-navbar" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a href="index.html" class="navbar-brand top-logo" style="outline: none; cursor: default;"><img src="images/app_block.jpg" alt="logo" style="outline: none; cursor: default;"></a>
                        </div>  <!--end navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!--<a data-toggle="modal" data-target="#myModalRegistro" class="btn btn-primary navbar-btn navbar-right" style="outline: none; cursor: default;">Registrate!</a>
                    <a data-toggle="modal" data-target="#myModal" class="btn btn-default navbar-btn navbar-right" style="outline: none; cursor: default;"> Ingresar </a>-->
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#home" style="outline: none; cursor: default;">Inicio</a></li>
                        <li><a href="#service" style="outline: none; cursor: default;">Novedades</a></li>
                        <li><a href="#contact" style="outline: none; cursor: default;">Contactanos</a></li>
                        <!--<li><a href="#"><?php printf($_SESSION['nombre_cliente']); ?></a></li>-->
                        <li class="nombre-perfil">
                            <a class=".perfil"  href="#" style=""><?php echo $_SESSION['nombre_empleado']; ?>
                             <i class="caret"></i>
                            </a>
                            <ul class="submenu-hijo" style="display:none;">
                             <li><a href="#" data-toggle="modal" data-target="#myModalActualizacionEmpleado">Editar Perfil</a></li>
                             <li><a href="page_part/desconectar.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>  <!--end collapse -->
            </div>  <!--end container -->

                </nav>
            </header><!--/-->

            

            <?php include('modal_empleado.php'); ?>
   
            <!--home section-->


            <!-- if you like to use surface. change class="home" to class="surface"-->
            <section id="home" class="home">
            

                <!-- <div id="surface"></div>-->
                <!-- <canvas id="canvas"></canvas>-->


                <!-- for canvas use class overlay to canvas-overlay-->
                <!-- for surface use class overlay to surface-overlay-->
                <div class="overlay">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="home-intro">
                                    <!--Header text -->
                                    <h1>Proyecto PYMES</h1>
                                    <h3>
                                          Diseño para el proyecto de bases de datos     
                                    </h3>

                                    <!--DOWNLOAD BUTTON -->
                                    <!--<div class="download-button">
                                        <a href="#" class="btn btn-default download-btn">Como funcionamos?<i class="fa fa-lg" style="outline: none; cursor: default;"></i></a>
                                    </div>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->

            
            <!-- Service Section-->
           <section id="service" class="sections">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="feature wow fadeInLeft animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <h4 style="outline: none; cursor: default;">Novedad 1</h4>
                            <p style="outline: none; cursor: default;">
                              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
                            </p>
                        </div>
                    </div><!--end 4 col-->

                    <div class="col-sm-6 col-md-3">
                        <div class="feature wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <h4 style="outline: none; cursor: default;">Novedad 2</h4>
                            <p style="outline: none; cursor: default;">
                              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
                            </p>
                        </div>
                    </div><!--end 4 col-->

                    <div class="col-sm-6 col-md-3">
                        <div class="feature wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <h4 style="outline: none; cursor: default;">Novedad 3</h4>
                            <p style="outline: none; cursor: default;">
                                Lorem Ipsum es simplemente el texto de relleno de las imprentas y e con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de 
                            </p>
                        </div>
                    </div><!--end 4 col-->
                    <div class="col-sm-6 col-md-3">
                        <div class="feature wow fadeInRight animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <h4 style="outline: none; cursor: default;">Novedad 4</h4>
                            <p style="outline: none; cursor: default;">
                              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsu Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                            </p>
                        </div>
                    </div><!--end 4 col-->
                </div><!--end row-->
            </div>
        </section><!--/-->


            <!--contact Section-->
            <section id="contact" class="sections">
                <div class="container">
                    <div class="row contact-2">

                        <div class="heading wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                            <div class="title text-center"><h1 style="outline: none; cursor: default;">Contactanos</h1></div>
                            <div class="subtitle text-center "><h5 style="outline: none; cursor: default;">Ante cualquier inquietud no dudes en contactarnos</h5></div>
                            <div class="separator text-center"></div>
                        </div>

                        <!--address-->
                        <div class="col-md-4">
                            <div class="contact-address">
                                <h4 style="outline: none; cursor: default;">Si eres proveedor o cliente</h4>
                                <ul>
                                    <li>Cll 35 # 12-652</li>
                                    <li> Cúcuta, Colombia</li>
                                    <li> <abbr title="Phone"></abbr> 577-1466 </li>

                                </ul>

                            </div>
                            <hr>
                            <p style="outline: none; cursor: default;">Solo envianos un correo electronico y te responderemos lo mas pronto posible. Mantente en conctacto con tu proveedor de servicios ante cualquier duda</p>
                        </div>

                        <div class="col-md-8 ">
                            <!-- CONTACT FORM -->
                            <div data-wow-offset="10" data-wow-duration="1.55s" class="wow rollIn animated contact-form">


                                <div id="message"></div>
                                <form method="post" action="scripts/contact.php" name="contactform" id="contactform">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control " name="name" id="name" placeholder="Nombre">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control " name="email" id="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control " id="subject" type="text" name="subject" placeholder="Asunto">
                                                <textarea class="form-control " id="msg" rows="5" placeholder="Mensaje"></textarea>
                                                <button class="btn btn-primary btn-lg" type="submit" id="submit" name="submit" data-loading-text="Loading..." style="outline: none; cursor: default;"><i class="fa fa-send" style="outline: none; cursor: default;"></i> Enviar mensaje</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section><!--/-->


            <!-- FOOTER Section-->

            <footer id="footer" class="footer-3">
                <div class="container">
                    <div class="row v-center">
                        <div class="col-sm-2">
                            <a class="brand editContent" href="#" style="outline: none; cursor: default;">Pymes</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="additional-links text-center  editContent">
                                Todos los derechos reservados 2017
                            </div>
                        </div>
                        <div class="col-sm-3  ">
                            <h6 class="editContent">Colombia</h6>
                            <div class="address editContent">
                                Av 2da Cll 18E 
                                <br>
                            </div>
                            <div class="social-btns">
                                <a href="#" style="outline: none; cursor: default;"><i class="fa fa-facebook" style="outline: none; cursor: default;"></i></a>
                                <a href="#" style="outline: none; cursor: default;"><i class="fa fa-twitter" style="outline: none; cursor: default;"></i></a>
                                <a href="#" style="outline: none; cursor: default;"><i class="fa fa-google-plus" style="outline: none; cursor: default;"></i></a>
                                <a href="#" style="outline: none; cursor: default;"><i class="fa fa-youtube" style="outline: none; cursor: default;"></i></a>
                                <a href="#" style="outline: none; cursor: default;"><i class="fa fa-linkedin" style="outline: none; cursor: default;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!--<script src="js/remodal.min.js"></script>-->
        <!--<script src="js/twitterFetcher_min.js"></script>-->
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.wow.min.js"></script>
        <script src="js/nivo-lightbox.min.js"></script>
        <script src="js/jquery-contact.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/app.js"></script>    
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
        <script src="js/jquery.easypiechart.min.js"></script>
        <!--<script type="text/javascript" src="js/twitterFetcher_min.js"></script>-->
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/main.js"></script>
        
        
        


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--        <script>
                    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','UA-XXXXX-X');ga('send','pageview');
                </script>-->
    

</body></html>