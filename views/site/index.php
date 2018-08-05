<?php
use   yii\bootstrap\BootstrapWidgetTrait;
use     yii\bootstrap\Carousel;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<div class="site-index">

   

    <div class="jumbotron">

        <img src="<?php echo Yii::getAlias('@web/images/baner2.png');?>" class="img-raised rounded img-fluid">

        <!--p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p!-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Ahorros</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                     <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Ahorros</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Prestamos</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                     <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Prestamos</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Filiales</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                     <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Filiales</a></p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <h2>Beneficios</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                    <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Beneficios</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Comités</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                    <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Comités</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Proyectos</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                    <div class="card card-raised card-carousel"   >
              <div style="height: 100%; " id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg2.jpg');?>" alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg3.jpg');?>" alt="Second slide">
                  
                  </div>
                
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo Yii::getAlias('@web/images/bg.jpg');?>" alt="Third slide">
                   
                  </div>
                </div>
               
              </div>
            </div>

                <p><a class="btn btn-primary btn-round" href="#">Proyectos</a></p>
            </div>
        </div>

    </div>
    <div class="jumbotron">

     
<h1>Misión</h1>
        <h3>“Somos una cooperativa de ahorro y crédito socialmente responsable que
contribuye al desarrollo integral de nuestros afiliados y afiliadas, de diversos
sectores económicos ofreciéndoles productos y servicios financieros de calidad,
contando con personal calificado, comprometido y tecnología adecuada.”</h3>
  </div>
  <div class="jumbotron">
 <h1>Visión</h1>
    <h3>“Ser una Cooperativa con solidez financiera, competitiva que continúe mejorando las
condiciones de vida de nuestros afiliados y afiliadas, mediante productos y servicios
de calidad que permitan una mayor inclusión financiera.”</h3>
    </div>




</div>

