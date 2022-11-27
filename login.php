<?php
session_start();
ob_start();
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/loginScreen.css">
    <title>Plim</title>
</head>

<body>
    <div class="header">
        <div class="fullWidth center">
            <img src="images/LogoAVA-1.png" alt="" srcset="">
        </div>
        <img src="images/LogoAVA-2.png" alt="" srcset="">
    </div>
    <div class="loginContainer center">
        <div class="loginContent center column">
            <h2>Faça seu Login</h2>
            <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($dados['SendLogin'])){
        //var_dump($dados);
        $query_usuario = "SELECT id, nome, usuario, senha_usuario 
                    FROM usuarios 
                    WHERE usuario =:usuario
                    LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);        
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() != 0 )){
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            //var_dump($row_usuario);
            if(password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])){
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                header("Location: index.php");
            }else{
                $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
            }
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }

        
    }

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>


            <form class="center column" action="" method="POST">
              
            
            <!-- <input class="inputForm campo" alt="campo para Matrícula" type="text"
                    placeholder="Insira sua Matrícula">
                <input class="inputForm campo" alt="campo para Senha" type="password" placeholder="Insira sua Senha">
                <input class="inputForm botao" alt="botão para Entrar" type="button" value="Entrar">
           -->
          
        <input class="inputForm campo" type="text" name="usuario" placeholder="Digite o usuário" value="<?php if(isset($dados['usuario'])){ echo $dados['usuario']; } ?>">
        <input class="inputForm campo" type="password" name="senha_usuario" placeholder="Digite a senha"value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>">


        <input class="inputForm botao" type="submit" value="Acessar" name="SendLogin">

          
          
            </form>
            <img class="line" src="images/Vector-1.svg">
            <div class="center column">
                <a class="esqueceuSenha" href="#">Esqueceu a Senha?</a>
                <div class="center">
                    <div class="row center">
                        <a class="termos" href="#">Política de Privacidade </a>
                        <p>-</p>
                        <a class="termos" href="#">Termos de Serviço</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>