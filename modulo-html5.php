<?php

include('verifica_login.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ETEC - html5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    

    <Style>

        @media (max-width: 575.98px) {
          .nav-menu {
            max-width: 100%;
          }
        }

      .secoes-container {
        padding: 20px;
        margin-top: 100px;
        margin-bottom: 50px;
        max-width: 1500px; 

      }

        @media (max-width: 575.98px) {
          .secoes-curso {
            max-width: 500px;
          }
        }

      .text-white {
        font-family: sans-serif;
      }

      .services-sub-title {
        font-size: 20px;
      }

      @media (max-width: 575.98px) {
          .elementos-secoes {
            max-width: 100%;
          }
        }

        @media (max-width: 991.98px) {
          .elementos-secoes {
            max-width: 100%;
          }
         }

      .elementos-secoes {
        box-shadow: 0px 1px 0px black;
        width: 1400px;
        margin-left: auto;
      }
      

    </Style>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-menu" style="max-width: 1500px; margin-left: auto; margin-right: auto;;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">ETEC - Ilha Solteira</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="margin-left: right;">
            <li><a href="index.html" class="nav-link">Home</a></li>
            <li type="button" value="Voltar" onclick="JavaScript: window.history.back();" class="nav-link" style="color: red;">Voltar</li>
          </div>
        </div>
      </div>
    </nav>


    

    <div class="container-fluid accordion accordion-flush secoes-container" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            SEÇÃO 1 - ARQUIVOS E INTRODUÇÃO AO SUPORTE
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body elementos-secoes">1. Introdução ao suporte</div>
          <div class="accordion-body elementos-secoes">2. Arquivos Necessários</div>
          <div class="accordion-body elementos-secoes">3. Instalando a IDE</div>
          <div class="accordion-body elementos-secoes">4. O que é HTML?</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            SEÇÃO 2
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            SEÇÃO 3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
    </div>





    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">DESENVOLVIMENTO DE SISTEMAS</h2>
            <p class="section-title mb-3 services-sub-title">Conitnue estudando estas também</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="images/Icons/logo-css.png" width="48"></span></div>
              <div>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="modulo-css3.php">Acessar Curso</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="images/Icons/logo-javascript.png" width="48"></span></div>
              <div>
                <h3>JAVA SCRIPT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="modulo-javascript.php">Acessar Curso</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="images/Icons/logo-php.png" width="48"></span></div>
              <div>
                <h3>PHP</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="modulo-php.php">Acessar Curso</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><img src="images/Icons/logo-mysql.png" width="48"></span></div>
              <div>
                <h3>MySQL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="modulo-mysql.php">Acessar Curso</a></p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>