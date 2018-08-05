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
<html lang="en">

<!--html lang="<?= Yii::$app->language ?>"-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


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
        <a class="navbar-brand" href="<?php echo Url::to(['index']); ?>">
         <!--img class="logo-img site-logo-img" src="<?php echo Yii::getAlias('@web/images/logo.png');?>" alt="COMFRAMUL" title="Una alternativa para cambiar tu vida."> <br--> Cooperativa Comframul </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Productos
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                 Cuentas de Ahorro
              </a>
              <a href="#" class="dropdown-item">
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
              <a href="#" class="dropdown-item">
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
              <a href="#" class="dropdown-item">
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
              <a href="#" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a  class="nav-link" href="<?php echo Url::to(['noticias']); ?>" >
               Noticias
            </a>
           
          </li>


          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Beneficios
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Esta.Financieros
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="#" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">app</i> Contactenos
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="<?php echo Url::to(['contact']); ?>" class="dropdown-item">
               Oficinas
              </a>
              <a href="#" class="dropdown-item">
                Documentation
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

  <div class="page-header header-filter clear-filter purple-filter"  data-parallax="true" style="background-image: url('<?php echo Yii::getAlias('@web/images/Tegucigalpa.jpg');?>'); height: 300px; width: 100%">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <!--div class="brand text-center">
            <h1>Cooperativa Comfral</h1>
 <h3 class="title text-right">Una alternativa para cambiar tu vida.</h3>
          </div-->



           
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
            
     

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--  buttons -->
        
        <!--                 end buttons             -->
     
        <!--                 inputs -->
        
        <!--                 end sliders -->
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
        url: '#'
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
<?php $this->endPage() ?>










