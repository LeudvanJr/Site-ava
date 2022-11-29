<?php
session_start();
include_once("conexao1.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$encerramento = filter_input(INPUT_POST, 'encerramento', FILTER_SANITIZE_STRING);
$tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "encerramento: $encerramento <br>";
echo "tema: $tema <br>";
echo "descricao: $descricao <br>";

$result_usuario = "INSERT INTO estudos (nome, encerramento, tema, descricao) VALUES ('$nome', '$encerramento','$tema','$descricao')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'></p>";
	header("Location: estudos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'></p>";
	header("Location: estudos.php");
}
