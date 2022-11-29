
<?php
    require_once 'conexao.php';
    session_start();
    ob_start();
?>

<?php

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $erros = null;

    if(!empty($dados['SendLogin'])){
        //var_dump($dados);
        $query_aluno = "SELECT id_aluno, matricula, nome, senha
        FROM Aluno
        WHERE matricula = :matricula
        LIMIT 1";
        $stmt = $conexao->prepare($query_aluno);
        $stmt->bindParam(':matricula', $dados['matricula'], PDO::PARAM_STR);
        $stmt->execute();

        if(($stmt) AND ($stmt->rowCount() != 0 )){
            $row_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($row_usuario);
            
            if($dados['senha_usuario'] === $row_usuario['senha']){
                $_SESSION['id'] = $row_usuario['id_aluno'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $erros = null;
                header("Location: index.php");
             }else{
                $erros = "Usuário ou senha inválida!";
            }
        }else{
            $erros = "Usuário ou senha inválida!";
        }
    }

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
            <?php if(isset($erros)): ?>
                <p style='color: #ff0000'>Usuário ou senha inválida!</p>
            <?php endif ?>

            <form class="center column" action="" method="POST">


                <!-- <input class="inputForm campo" alt="campo para Matrícula" type="text"
                    placeholder="Insira sua Matrícula">
                <input class="inputForm campo" alt="campo para Senha" type="password" placeholder="Insira sua Senha">
                <input class="inputForm botao" alt="botão para Entrar" type="button" value="Entrar">
                 -->

                <input class="inputForm campo" type="text" name="matricula" placeholder="Digite o usuário"
                    value="<?php if(isset($dados['matricula'])){ echo $dados['matricula']; } ?>">

                <input class="inputForm campo" type="password" name="senha_usuario" placeholder="Digite a senha"
                    value="<?php if(isset($dados['senha_usuario'])){ echo $dados['senha_usuario']; } ?>">

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