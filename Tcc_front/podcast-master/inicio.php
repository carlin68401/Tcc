<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">


          <div class="col-3">
            <img src='./images/imagem2.png' alt="Avatar Logo" style="width:160px;" class="rounded-pill"> 
          </div>
          <div class="col-9">
            <nav class="site-navigation position-relative text-right text-md-right" role="navigation">

              

              <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.php">Inicio</a>
                </li>
              
                <li><a href="about.php">Sobre</a></li>
                <li> <a href="logout.php">Sair</a></li>
               
              </ul>
            </nav>


          </div>

        </div>
      </div>
      
    </header>

    

    <div class="container pt-5 hero">
      <div class="row align-items-center text-center text-md-left">
        
        <div class="col-lg-4">
          <h1 class="mb-3 display-3">Descubra o mundo natural com o seu smartphone</h1>
          <p>Aprenda sobre a natureza, onde quer que você esteja!</p>
        </div>
        <div class="col-lg-8">
          <img src="images/1x/imagem.png" alt="Image" class="img-fluid">    
        </div>
      </div>
    </div>
    
<br><br>
<br><br>
<br><br>
<div class="site-section bg-light block-13">
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <div class="featured-user  mb-5 mb-lg-0">
              <p>Conheça a natureza ao seu redor com apenas um clique.</p>
              
            </div>
          </div>

          <div class="col-lg-9">


            <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
              <button type="button" onclick="init()" name="submit" id="submit" class="btn btn-primary" style="background-color:#35384B; border-color:#35384B; width: 250px; height: 70px; margin: 15px;">Iniciar Reconhecimento</button>
            <div id="webcam-container"></div>
            <div id="label-container" style="margin: 60px; text-align: center; display: flex; align-items: center; justify-content: center; font-family: 'Arial', sans-serif; font-size: 40px; color: #333;"></div>
              <div class="text">            
               </div>
              </div>          
                </div>
                    </div>
                  </div>
                </div>
              
              
    
    <footer class="site-footer">
      
        

          <center><div class="center">
            <div class="teste">
              <p>Todos os direitos reservados &copy. Carlos Eduardo . Samuel V Reis</p>
            </div>
          </div>
          </center>
        </div>
      </div>
    
      
    </footer>
  
<!--teste-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/mediaelement-and-player.min.js"></script>

  


  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
  <script src='tensor.js'></script>
</body>
</html>