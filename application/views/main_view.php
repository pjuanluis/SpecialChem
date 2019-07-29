<!DOCTYPE HTML>
<html lang="es">
  <head>
    <title>Special Chem | <?=$titulo?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>res/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>res/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>res/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>res/fonts/flaticons/font/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>res/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>res/img/mainLogo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active display" href="<?=base_url()?>">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industria</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="<?=base_url()?>index.php/web/industria">Alimentos</a>
                    <a class="dropdown-item" href="<?=base_url()?>index.php/web/industria">Recubrimientos</a>
                    <a class="dropdown-item" href="<?=base_url()?>index.php/web/industria">Plasticos y derivados</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>index.php/web/conocenos">Nosotros</a>
              </li>
      			  <li>
      				  <a class="nav-link" href="<?=base_url()?>index.php/web/contacto">Contáctanos</a>
      			  </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link"><i class="fa fa-search"></i></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <!-- ##### Content ##### -->
    <?=$vista?>


    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>Acerca de Nosotros</h3>
            <p class="mb-5 text-justify">Speial Chem es una empresa de distribución de productos químicos. En representación de los principales productores mundiales, nuestro personal de ventas son técnicos expertos enfocados en el mercado, que ofrecen soluciones a los problemas de los clientes que utilizan nuestra cartera integral y complementaria de productos.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Horario de Atención</h3>
              <p><strong class="d-block">Lunes-Viernes</strong> 9:00 AM - 6:00 PM</p>
            </div>
            <div>
              <h3>Información de Contacto</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                      <span class="d-block">Dirección:</span>
                      <span class="text-white">Boulevard Bernardo Quintana 2481 Parque Advance, Bodega 9</span></li>
                <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">442 642 5724 y 442 642 5725</span></li>
                <li class="d-block"><span class="d-block">Email:</span><span class="text-white">contacto@specialchem.com.mx</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="about.html">Nosotros</a></li>
              <li><a href="#">Industria</a></li>
              <li><a href="recipes.html">Productos</a></li>
              <li><a href="contac.html">Contacto</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> | SpecialChem es una marca registrada.</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="<?=base_url()?>res/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>res/js/popper.min.js"></script>
    <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>res/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>res/js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>res/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>res/js/magnific-popup-options.js"></script> 
    <script src="<?=base_url()?>res/js/main.js"></script>
  
  </body>
</html>