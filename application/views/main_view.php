<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gp Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="<?=base_url()?>res/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>res/css/font-awesome.min.css">
  <link href="<?=base_url()?>res/css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>res/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?=base_url()?>res/css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>res/css/responsive.css" rel="stylesheet">

</head>

<body class="homepage">
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="<?=base_url()?>">
            <img height="73" width="90" src="http://www.specialchem.com.mx/images/icons/special.png">
          </a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url()?>">Inicio</a></li>
            <li><a href="<?=base_url()?>index.php/web/conocenos">Conócenos</a></li>
            <li><a href="<?=base_url()?>index.php/web/industria">Industria</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="<?=base_url()?>index.php/web/contacto">Contacto</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>

  <!-- Insert view here -->
    
  <?=$vista?>


  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Conócenos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <script src="<?=base_url()?>res/js/jquery.js"></script>
  <script src="<?=base_url()?>res/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>res/js/jquery.prettyPhoto.js"></script>
  <script src="<?=base_url()?>res/js/jquery.isotope.min.js"></script>
  <script src="<?=base_url()?>res/js/wow.min.js"></script>
  <script src="<?=base_url()?>res/js/main.js"></script>
  <script src="<?=base_url()?>res/contactform/contactform.js"></script>

</body>

</html>
