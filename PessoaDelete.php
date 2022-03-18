<?php
require_once("Conexao.php");
$id = $_GET['id'];

$sql = "DELETE FROM pessoa WHERE idpessoa=$id";

if ($link->query($sql) == TRUE) {
    echo "<script>window.location='CadastroIndex.php';alert('Cadastro excluido com sucesso!');</script>";
} else {
    echo "<div class=alerta error>Erro: " . $link->error;"</div>";
}
$link->close();

?>