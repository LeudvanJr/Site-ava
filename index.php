<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar login!</p>";
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agenda</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div class="header">
    <p id="mensagemTopo">
      Boa Tarde,  <?php echo $_SESSION['nome'];?>
    </p>
    <p id="diaDeHoje">
      <?php
          setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
          date_default_timezone_set('America/Sao_Paulo');
          echo strftime('%A, %d de %B de %Y', strtotime('today'));
      ?>
    </p>
  </div>

  <?php
    include_once('php/barraLateral.php');
  ?>

  <div class="img-globo">
    <img src="images/image.png" alt="">

  </div>


  <div class="content">
    <h1>
      Matérias
    </h1>

    
    <div id="menu-container" class="arrow">
      <div id="btn-nav-previous" style="fill: black">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
          <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
          <path d="M0 0h24v24H0z" fill="none" />
        </svg>
      </div>
      <div id="btn-nav-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
          <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
          <path d="M0 0h24v24H0z" fill="none" />
        </svg>
      </div>

     
    
    </div>
    <section>
      <div class="menu-inner-box">
        <div class="menu">
          <a class="menu-item" href="#"><img src="images/bds.png" alt=""></a>
          <a class="menu-item" href="#"><img src="images/historia.png" alt=""></a>
          <a class="menu-item" href="#"><img src="images/geografia.png" alt=""></a>
          <a class="menu-item" href="#"><img src="images/matematica.png" alt=""></a>
          <a class="menu-item" href="#"><img src="images/matematica.png" alt=""></a>
          

        </div>
      </div>
    </section>
   
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
   
    $(document).ready(function(){
        $('#btn-nav-previous').click(function(){
            $(".menu-inner-box").animate({scrollLeft: "-=110px"});
        });
        
        $('#btn-nav-next').click(function(){
            $(".menu-inner-box").animate({scrollLeft: "+=110px"});
        });
    });</script>

</body>

</html>