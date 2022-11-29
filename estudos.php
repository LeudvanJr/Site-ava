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
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/modal.css">
    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <?php
        include_once('php/barraLateral.php');
    ?>


    <!-- CONTEÚDO -->
    <div class="contentG">

        <!-- Titulo e Botão de Adicionar Estudo -->
        <div class="relative-flex">
            <h1> Estudos </h1>
            <button id="addEstudoBtn" class="adicionar-estudo">Adicionar Estudo</button>
        </div>


        <!-- MODAL -->
        <div class="modal-box">

            <!-- The Modal -->
            <div id="modalEstudo" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span id="closeEst" class="close">&times;</span>

                    <!-- Form -->
                    <div class="container">
                        <form action="action_page.php">

                            <!-- Nome do Estudo -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Nome</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="firstname" placeholder="Geometria Analítica..."
                                        required>
                                </div>
                            </div>

                            <!-- Data de Encerramento -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="lname">Encerramento</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" id="dataEncerramento" name="data_encerramento">
                                </div>
                            </div>

                            <!-- Tema do Estudo -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="country">Tema</label>
                                </div>
                                <div class="col-75">
                                    <select id="tema" name="tema" required>
                                        <option value="historia">História</option>
                                        <option value="matematica_avancada">Matematíca Avançada</option>
                                        <option value="react_native">React Native</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Descrição do Estudo -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Descrição</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="subject" name="subject" placeholder="Descrição do seu estudo..."
                                        style="height:200px"></textarea>
                                </div>
                            </div>

                            <!-- Botão submit -->
                            <div class="row">
                                <input type="submit" value="Submit">
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>


        <!-- SLIDER 1 -->
        <div class="slider-box">

            <h2>React Native</h2>

            <div class="slider">
                <button class="slider-prev"></button>

                <div class="inner-slider">
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                </div>

                <button class="slider-next"></button>

            </div>
        </div>

        <!-- SLIDER 2 -->
        <div class="slider-box">

            <h2>React Native</h2>

            <div class="slider">
                <button class="slider-prev"></button>

                <div class="inner-slider">
                    <div class="slider-item">
                        <div class="slider-content fazendo">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor" id="cor1a6923"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                </div>

                <button class="slider-next"></button>

            </div>
        </div>

        <!-- SLIDER 3 -->
        <div class="slider-box">

            <h2>React Native</h2>

            <div class="slider">
                <button class="slider-prev"></button>

                <div class="inner-slider">
                    <div class="slider-item">
                        <div class="slider-content atrasado">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-content">
                            <div class="circulo-lateral"></div>
                            <div class="cor"></div>
                            <p class="titulo">Matemática e suas Tecnologias</p>
                        </div>
                    </div>
                </div>

                <button class="slider-next"></button>

            </div>
        </div>

        <!-- MODAL -->
        <div class="modal-box">

            <!-- Trigger/Open The Modal -->
            <button id="myBtn" class="adicionar-tema">+ Adicionar Tema...</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">

                    <span id="closeModalTema" class="close">&times;</span>

                    <!-- Form -->
                    <div class="container">
                        <form action="action_page.php">

                            <!-- Nome do Tema -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Nome</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="firstname" placeholder="Seu novo tema..."
                                        required>
                                </div>
                            </div>

                            <!-- Cor do Tema -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Cor</label>
                                </div>
                                <div class="col-75">
                                    <input type="color" id="fname" name="firstname" placeholder="Geometria Analítica" required>
                                </div>
                            </div>

                            <div class="row">
                                <input type="submit" value="Submit">
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="js/script.js"></script>

</html>