<?php
require_once("Conexao.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['celular'];
$sexo = $_POST['sexo']; 


$sql = "INSERT INTO pessoa (nome, idade, email, celular, sexo) VALUES ('$nome', '$idade', '$email', '$telefone', '$sexo')";

if ($link->query($sql) === TRUE) {
    echo "<script>window.location='CadastroIndex.php';alert('Cadastro efetuado com sucesso!');</script>";
} else {
    $mens = "Erro ao efetuar cadastro";
}

mysqli_close($link);

?> 
