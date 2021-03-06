<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('estilos/StyleMenu/styleContacto.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://kit.fontawesome.com/f0d33ae199.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>
<body class="body">
    <div class="div_body">
        
        <header class="header">
            <div class="div_header">
                <a class="local" href="#">
                    <h1 class="titulo_local" title="Inicio">Local Frontera</h1> </a>
                <button class="class-toggle">
                    
        <i id="icono" class="fas fa-bars"></i>
          </button>            
                <nav class="class_nav">
                    <ul id="menu" class="nav-menu">

                       <div class="div_li-1">
                           
                           <li id="id_li-1" class="li-2"><a href="<?php echo e(route('habitacion')); ?>" class="link_nav">Habitación</a></li>
                           
                           <li id="id_li-1" class="li-3"><a href="<?php echo e(route('comedor')); ?>" class="link_nav">Comedor</a></li>
                           
                           <li id="id_li-1" class="li-4"><a href="<?php echo e(route('sala')); ?>" class="link_nav">Sala</a></li>

                           <li id="id_li-1" class="li-1"><a href="<?php echo e(route('exterior')); ?>" class="link_nav">Jardín y Exterior</a></li>
                           
                           <li id="id_li-1" class="li-5"><a href="<?php echo e(route('registrar.show')); ?>" class="link_nav">Contacto</a></li>
                        
                        </div>
                           
                        </ul>
                </nav>
            </div>    
        </header>

        <article class="class_articulo">
           
            <div class="class_img">
                <img  class="img" src="imagenes/header_img.jpg
                " alt="muebles">
                
            </div>
        </article>
        <article class="class_articulo-2">
            <div class="div_h2 p-3">
            <h2 class="class_h2">Para El Hogar </h2>                  
            </div>

            <section class="section-1">
              <div class="div_mag-flex">

                  <div class="div_hogar-fila-1">
                      
                      <div class="div_img-1">
                       <img class="img-section" src="imagenes/biblioteca.jpg" alt="ropero">

                       <div class="div_precio">
                           
                        <span class="precio">$2000</span>
                    </div>
                    <div class="div_añadir">
                        <a class="añadir" href="#" >Armario pequeño</a>
                    </div>

                        <div class="div_boton">
                            <button value="" class="boton"> Comprar</button>
                        </div>    

                    </div>

                        
                        <div class="div_img-2">
                            <img class="img-section" src="imagenes/estante-biblioteca-100.jpg" alt="ropero">
                            
                                <div class="div_precio">
                           
                                    <span class="precio">$5000</span>
                                </div>
                                <div class="div_añadir">
                                    <a class="añadir" href="#" >
                                        Gabinete Tucker, madera </a>
                                </div>
                                <div class="div_boton">
                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-3">
                            <img class="img-section" src="imagenes/ropero2.jpg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$4500</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Armario ropero </a>
                            </div>
                            <div class="div_boton">
                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-4">
                            <img class="img-section" src="imagenes/ropero_chico.jpg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$5000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Gabinete de Almacenamiento </a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="div_hogar-fila-2">
                        
                        
                        <div class="div_img-5">
                            <img class="img-section" src="imagenes/mueble_none.png" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$4000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Estante Gabinete</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-6">
                            <img class="img-section" src="imagenes/biblioteca2.jpeg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$2000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Biblioteca</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-7">
                            <img class="img-section" src="imagenes/ropero2puertas.jpeg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$2500</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Armario pequeño</a>
                            </div>

                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        
                        <div class="div_img-8">
                            <img class="img-section" src="imagenes/aereo.jpg" alt="ropero">
                            <div class="div_precio">
                           
                                <span class="precio">$3000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Estante aereo</a>
                            </div>

                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="div_hogar-fila-3">
                        
                        <div class="div_img-9">
                            <img class="img-section" src="imagenes/mueble_chico2.jpeg" alt="ropero">
                            <div class="div_precio">
                           
                                <span class="precio">$1000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Gabetero pequeño</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-10">
                            <img class="img-section" src="imagenes/mueble_chico.jpg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$1000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Estante pequeño</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-11">
                            <img class="img-section" src="imagenes/mesaFor2.jpg" alt="ropero">
                            <div class="div_precio">
                           
                                <span class="precio">$4000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Mesa y Sillas</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                        
                        <div class="div_img-12">
                            <img class="img-section" src="imagenes/mesaRemplaso2.jpg" alt="ropero">

                            <div class="div_precio">
                           
                                <span class="precio">$3000</span>
                            </div>
                            <div class="div_añadir">
                                <a class="añadir" href="#" >
                                    Mesa</a>
                            </div>
                            <div class="div_boton">

                                <button class="boton"> Comprar</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                </section>
            </article>
            
           
            
        </div>
        <footer id="dk-footer" class="dk-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
    
                        <div style="transform: translateY(150px); " class=" dk-footer-box-info col-lg-3">
                            <a href="index.html" class="footer-logo">
                               
                            </a>
                            <p class="text-white footer-info-text">
                                Sitio de referencia sobre Lorem Ipsum, dando información sobre actualisaciones, así como nuevos Gabinetes, mueves etc.
                            </p>
                            <div class="footer-social-link">
                                <h3>Siguenos en</h3>
                                <ul>
                                     <li>
                                        <a href="https://www.facebook.com/profile.php?id=100067878923109">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/NibaldoPerez3">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/n1v4ld0_0/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    
                                </ul>
                            </div>
                            <!-- End Social link -->
                        </div>
                        <!-- End Footer info -->
                        <div class="footer-awarad">
                            <img src="images/icon/best.png" alt="">
                           
                        </div>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-us">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info">
                                        <h3>Fronterisa</h3>
                                        <p>Linea</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                            <div class="col-md-6">
                                <div class="contact-us contact-us-last">
                                    <div class="contact-icon">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info">
                                        <h3>096 420 467</h3>
                                        <p>LLamanos</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Contact Row -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget footer-left-widget">
                                    <div class="section-heading">
                                        <h3>Enlaces Utiles</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('acerca')); ?>">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Services</a>
                                        </li>
                                        <li>
                                            <a href="#">Projects</a>
                                        </li>
                                        <li>
                                            <a href="#">Our Team</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#">Contact us</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#">Faq</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Footer Widget -->
                            </div>
                            <!-- End col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget">
                                    <div class="section-heading">
                                        <h3>Contacta</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <p class="text-white"><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                        Sitio de referencia sobre Lorem Ipsum, que también ofrece información sobre sus orígenes..</p>
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="col dk-footer-form">
                                                <input type="email" class="form-control" placeholder="Email Address">
                                                <button type="submit">
                                                    <i class="fa fa-send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End form -->
                                </div>
                                <!-- End footer widget -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Widget Row -->
            </div>
            <!-- End Contact Container -->
    
    
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Copyright © 2021, All Right Reserved Seobin</span>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="copyright-menu">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('home')); ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('term')); ?>">Terms</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('acerca')); ?>">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('registrar.show')); ?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Copyright Container -->
            </div>
            <!-- End Copyright -->
            <!-- Back to top -->
            <div id="back-to-top" class="back-to-top">
                <a href="#">
                    <button class="btn btn-dark" title="Back to Top" style="display: block;">
                        <i class="fa fa-angle-up"></i>
                    </button>
                </a>
            </div>
            <!-- End Back to top -->
    </footer>
    
          <script src="<?php echo e(asset('estilos/bootstrap.min.js')); ?>"></script>
    
        <script src=" <?php echo e(asset('js/app.js')); ?>"></script>
    </body>
    </html>
<?php /**PATH /var/www/html/tienda/resources/views/home.blade.php ENDPATH**/ ?>