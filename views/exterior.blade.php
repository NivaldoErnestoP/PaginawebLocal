<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardín Y Exterior</title>
    <script src="https://kit.fontawesome.com/f0d33ae199.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('estilos/StyleMenu/styleContacto.css')}}">
    <link rel="stylesheet" href="{{asset('estilos/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('estilos/StyleMenu/styleExterior.css')}}">
    <link rel="stylesheet" href="{{asset('estilos/estilos.css')}}">
  
</head>
<body>
    <header class="header">
        <div class="div_header">
        
            <a class="local" href="{{route('home')}}">
                <h1 title="Inicio" class="titulo_local">Local Frontera</h1> </a>
            <button class="class-toggle">
    <i id="icono" class="fas fa-bars"></i>
      </button>            
            <nav class="class_nav">
                <ul id="menu" class="nav-menu">
                   <div class="div_li-1">
                       <li id="id_li-1" class="li-2"><a href="{{route('habitacion')}}" class="link_nav">Habitación</a></li>
                       
                       <li id="id_li-1" class="li-3"><a href="{{route('comedor')}}" class="link_nav">Comedor</a></li>
                       
                       <li id="id_li-1" class="li-4"><a href="{{route('sala')}}" class="link_nav">Sala</a></li>

                       <li id="id_li-1" class="li-1"><a    href="#" class="link_nav">Jardín y Exterior</a></li>
                       
                       <li id="id_li-1" class="li-5"><a href="{{route('registrar.show')}}" class="link_nav">Contacto</a></li>
                    
                    </div>                       
                    </ul>
            </nav>

        </div>    
    </header>
      <div class="article">
            <div class="imagenes">
                <div class="boton1">
                    <img src="../imagenes/mesaExterior.jpg" alt="mesa exterior">
                    <div class="precio01">
                        <a class="precio" href="#">Juego de Sillas + Mesa desplegable </a>
                    </div>
                    <div class="btn">    
                        <button id="hov" class="boton01">Comprar</button>
                    </div>
                </div>
                 <div class="boton2">
                     <img src="../imagenes/mesaExterior2.jpeg" alt="mesa exterior">
                     <div class="precio01">
                        <a class="precio" href="#">Mesa + Silla </a>
                    </div>
                     <div class="btn">
                         <button id="hov" class="boton02">Comprar</button>
                        </div>
                    </div>
                     <div class="boton3">
                         <img src="../imagenes/sillaExterior.jpg" alt="mesa exterior">
                         <div class="precio01">
                            <a class="precio" href="#">Silla Plegable </a>
                        </div>
                         <div class="btn">
                             
                             <button id="hov" class="boton03">Comprar</button>
                            </div>
                        </div>
                <div class="boton4">
                    <img src="../imagenes/escalera.png" alt="escalera">
                    <div class="precio01">
                        <a class="precio" href="#">Biblioteca escalera</a>
                    </div> 
                    <div class="btn">
                        <button id="hov" class="boton04">Comprar</button>
                    </div>
                   
                </div>
                 <div class="boton5">
                 <img src="../imagenes/sillaExterior2.jpg" alt="silla Exterior">
                 <div class="precio01">
                    <a id="hov" class="precio" href="#">Silla Plegable </a>
                </div>
                 <div class="btn">
                     <button id="hov" class="boton05">Comprar</button>
                    </div>
                    </div>

            </div>
      </div>
      <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">

                    <div style="transform: translateY(150px)" class=" dk-footer-box-info col-lg-3">
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
                                {{-- </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    {{-- <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                       
                    </div> --}}
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
                                        <a href="{{route('acerca')}}">About us</a>
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
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('term')}}">Terms</a>
                                </li>
                                <li>
                                    <a href="{{route('acerca')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{route('registrar.show')}}">Contact</a>
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

     <script src="{{asset('estilos/bootstrap.min.js')}}"></script>

    <script src=" {{asset('js/app.js')}}"></script>
</body>
</html>