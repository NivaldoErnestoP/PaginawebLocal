
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
{{--    
    <link rel="stylesheet" href="StyleMenu/styleContacto.css">
    
    <link rel="stylesheet" href="estilos/estilos.css"> --}}

    <link rel="stylesheet" href="{{asset('estilos/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('estilos/StyleMenu/styleContacto.css')}}">

    <link rel="stylesheet" href="{{asset('estilos/bootstrap.min.css')}}">
    <script src="https://kit.fontawesome.com/f0d33ae199.js" crossorigin="anonymous"></script>
</head>
<body>

<header style="background: #202020 !important; color: " class="p-4 container-fluid bg-white header">
            <div class="div_header">            
                <a class="local" href="{{route('home')}}">
                    <h1  class="titulo_local color">Local Frontera</h1> </a>

                <button class="class-toggle">
                    
        <i id="icono" class="fas fa-bars"></i>
          </button>            
                <nav class="class_nav">

                    <ul id="menu" class="nav-menu">
                       <div class="div_li-1">

                           
                           <li id="id_li-1" class="li-2"><a href="{{route('habitacion')}}" class="link_nav">Habitación</a></li>
                           
                           <li id="id_li-1" class="li-3"><a href="{{route('comedor')}}" class="link_nav">Comedor</a></li>
                           
                           <li id="id_li-1" class="li-4"><a href="{{route('sala')}}" class="link_nav">Sala</a></li>

                           <li id="id_li-1" class="li-1"><a href="{{route('exterior')}}" class="link_nav">Jardín y Exterior</a></li>
                           
                           <li id="id_li-1" class="li-5"><a href="#" class="link_nav">Contacto</a></li>
                           
                        </div>
                           
                        </ul>
                </nav>

            </div>    
        </header>

     <div class="p-5 container form">

        <form  action="{{route('registrar.save')}}" method="post">
            
            @csrf
            <div class="m-4">
                <div  class="bg-white valid-feedback" name="envio">
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{Session::get('fail')}}
                    @endif                                                  
                </div>
                @if(Session::get('success'))
                <div style= "font-size: 24px;" class="alert alert-success text-center p-4 ">
                {{Session::get('success')}}
                @endif
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label" >Name</label>
                <input  value="{{old('name')}}" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" type="text" name="name" id="name">   
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror    
            </div>
            
            <div class="mb-3 has-validation">
                <label for="email" class=" form-label">Email address</label>                
                <input value="{{old('email')}}" name="email" aria-describedby="valemail" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email">
                @error('email')
                <div class="invalid-feedback" id="valemail">{{ $message }}</div>
                @enderror
                
            </div>
            
            <div class="mb-3">

                <label for="phone" class=" form-label">Telefono</label>
                <input value="{{old('phone')}}" name="phone" type="text" class=" form-control {{$errors->has('phone') ? 'is-invalid':''}}" id="phone">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3" >
                <label for="message" class="form-label" >Mensaje</label>
                
                <textarea  class="form-control {{$errors->has('message') ? 'is-invalid':''}}" name="message" id="message" rows="3" value="{{old('message')}}"></textarea>
                @error('message')
                <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" name="boton" class="btn btn-success">Enviar</button>

           
            </div>
        
        </div>
    </div>
</form>

{{-- <footer>

    <div class="container-fluid d-flex alt ">
        
        <div class="container d-flex justify-content-center flex-column  ">

        <div style="border: 1px solid #000" class="text-center">
            <p class="font ">Redes Sociales</p>
        </div>
            <div class="redes">     
                <img id="redes" class="m-4" width="40" height="40" src="{{asset('iconos/facebook.png')}}" alt="face">
            

                <img class="m-4" width="40" height="40" src="{{asset('iconos/instagram.png')}}" alt="instagram">            
            
                <img class="m-4" width="40" height="40" src="{{asset('iconos/gorjeo.png')}}" alt="instagram">
            
            </div>
            
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum minus nam officia eum, repudiandae labore non similique error nulla rem distinctio illo tempore quod vitae sed unde nostrum optio deleniti?</p>
          </div>
        </div>
        

</footer> --}}

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
                                    <a href="#">Contact</a>
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
                <i class="fa fa-angle-up"></i></a>
            </button>
        </div>
        <!-- End Back to top -->
</footer>

      <script src="{{asset('estilos/bootstrap.min.js')}}"></script>

       <script src=" {{asset('js/app.js')}}"></script>
</body>
</html>