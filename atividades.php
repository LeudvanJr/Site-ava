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
    
    <?php
        include_once('php/barraLateral.php');
    ?>

    <div class="contentG">
        <h1>
            To-do-list
        </h1>

        <div class="coluna">

            <div class="row">
                <div class="column">
                    <div class="card">
                        <h3>Para fazer - 8</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="column">
                  <div class="card">
                    <h3>Fazendo - 2</h3>
                    <p>Some text</p>
                    <p>Some text</p>
                    <p>Some text</p>
                    <p>Some text</p>
                    <p>Some text</p>
                    <p>Opa</p>
                    <p>Teste</p>
                  </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h3>Feito - 28</h3>
                        <p>Some text</p>
                        <p>gipjsrghji</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>