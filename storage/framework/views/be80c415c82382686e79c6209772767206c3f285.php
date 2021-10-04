
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>


    <link rel="stylesheet" href="<?php echo e(asset('estilos/estilos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('estilos/StyleMenu/styleContacto.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('estilos/bootstrap.min.css')); ?>">
    <script src="https://kit.fontawesome.com/f0d33ae199.js" crossorigin="anonymous"></script>
</head>
<body>

<header style="background: #202020 !important; color: " class="p-4 container-fluid bg-white header">
            <div class="div_header">            
                <a class="local" href="<?php echo e(route('home')); ?>">
                    <h1  class="titulo_local color">Local Frontera</h1> </a>

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
                           
                           <li id="id_li-1" class="li-5"><a href="#" class="link_nav">Contacto</a></li>
                           
                        </div>
                           
                        </ul>
                </nav>

            </div>    
        </header>

     <div class="p-5 container form">

        <form  action="<?php echo e(route('registrar.save')); ?>" method="post">
            
            <?php echo csrf_field(); ?>
            <div class="m-4">
                <div  class="bg-white valid-feedback" name="envio">
                    <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                    <?php echo e(Session::get('fail')); ?>

                    <?php endif; ?>                                                  
                </div>
                <?php if(Session::get('success')): ?>
                <div style= "font-size: 24px;" class="alert alert-success text-center p-4 ">
                <?php echo e(Session::get('success')); ?>

                <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label" >Name</label>
                <input  value="<?php echo e(old('name')); ?>" class="form-control <?php echo e($errors->has('name') ? 'is-invalid':''); ?>" type="text" name="name" id="name">   
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
            </div>
            
            <div class="mb-3 has-validation">
                <label for="email" class=" form-label">Email address</label>                
                <input value="<?php echo e(old('email')); ?>" name="email" aria-describedby="valemail" type="email" class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback" id="valemail"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
            </div>
            
            <div class="mb-3">

                <label for="phone" class=" form-label">Telefono</label>
                <input value="<?php echo e(old('phone')); ?>" name="phone" type="text" class=" form-control <?php echo e($errors->has('phone') ? 'is-invalid':''); ?>" id="phone">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div class="mb-3" >
                <label for="message" class="form-label" >Mensaje</label>
                
                <textarea  class="form-control <?php echo e($errors->has('message') ? 'is-invalid':''); ?>" name="message" id="message" rows="3" value="<?php echo e(old('message')); ?>"></textarea>
                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class=" invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" name="boton" class="btn btn-success">Enviar</button>

           
            </div>
        
        </div>
    </div>
</form>



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

      <script src="<?php echo e(asset('estilos/bootstrap.min.js')); ?>"></script>

       <script src=" <?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH /var/www/html/tienda/resources/views/contacto.blade.php ENDPATH**/ ?>