<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use   yii\bootstrap\BootstrapWidgetTrait;
use     yii\bootstrap\Carousel;
use     yii\bootstrap\ButtonDropdown;
use yii\helpers\Url;

/* @var $this yii\web\View */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


 


 
  <img class="col-sm-12 img-responsive mg-rounded" src='<?php echo Yii::getAlias('@web/images/baner.png');?>'>





<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />


<div class="navbar navbar-fixed-top">
  <div class="navbar-inner" style="color:white">
    <div class="container-fluid">
      <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a href="#" class="brand" style="color:white">Project name</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="<?php echo Url::to(['index']); ?>">Inicio</a></li>
         
 <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Productos <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">2-level Dropdown <i class="icon-arrow-right"></i></a>
                <ul style="color:white" class="dropdown-menu sub-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Promociones</a></li>
          <li><a href="#">Capacitaciones</a></li>
          <li><a href="#">Noticias</a></li>
          <li><a href="#">Veneficios</a></li>
          <li><a href="#">Proyeccion Social</a></li>
          <li><a href="#">Estados Financieros</a></li>
          <li><a href="<?php echo Url::to(['site/contact']); ?>">Contactenos</a></li>
         
        </ul>
        <!--form action="" class="navbar-search pull-left">
          <input type="text" placeholder="Search" class="search-query span2">
        </form-->
        <ul class="nav pull-right">
          <li><a href="#">Link</a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a class="#" href="#">Menu</a>
          </li>
        </ul>
      </div>
      <!-- /.nav-collapse -->
    </div>
  </div>
</div>




<?php 

        ?>


<!-- Publicaciones-->
<div class="col-sm-2 " style="height: 100%; position: absolute;">
   Faceook
 </div>

</div>     
  
 <div  class="pull-right col-sm-10" style="   ">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    
</div> 



   
</div>

<footer  style="  
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 40px;
  color: white;" class="col-sm-12 bg-primary pull-left" >
    <div class="container">
        <p class="pull-left">&copy; COMFRAMUL <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

----------------------------------------------------------------------

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::getAlias('@web/images/apple-icon.png');?>">
  
  <link rel="icon" type="image/png" href="<?php echo Yii::getAlias('@web/images/favicon.png');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->

  <link href="<?php echo Yii::getAlias('@web/assets/8978543/css/material-kit.css?v=2.0.4');?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo Yii::getAlias('@web/assets/8978543/demo/demo.css');?>" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" s id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="">
          Cooperativa Comframul </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <div class="container siteheader-container header--oldstyles">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Productos
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                 Cuentas de Ahorro
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                Prestamos
              </a>
            </div>
          </li>




          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Servicios
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Promociones
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Capacitaciones
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Noticias
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layer</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>


          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Beneficios
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Estados Financieros
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Contactenos
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>




         
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo Yii::getAlias('@web/images/bg.jpg');?>')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>Your title here</h1>


<div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/img/bg2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

            <h3 class="title text-center">Subtitle</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Your main section here</h2>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      
      <div class="copyright float-right">
        &copy;
        <script>
          document.write('Cooperativa Comframul ' + new Date().getFullYear())
        </script>, Todos los derechos recervados  <i class="material-icons"> 
      </div>
    </div>
  </footer>





   <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/core/jquery.min.js');?>"></script>
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/core/popper.min.js');?>"></script>
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/core/bootstrap-material-design.min.js');?>" type="text/javascript"></script>










  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/plugins/moment.min.js');?>"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/plugins/bootstrap-datetimepicker.js');?>" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/plugins/nouislider.min.js');?>" type="text/javascript"></script>
  <!--  Plugin for Sharrre btn -->
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/plugins/jquery.sharrre.js');?>" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo Yii::getAlias('@web/assets/8978543/js/material-kit.js?v=2.0.4');?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

      $('#googlePlus').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

    });
  </script>
</body>

</html>
