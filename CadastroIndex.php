<?Php
    include ("ListaPessoaDO.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="/estudoJaison/css/estilo.css" rel="stylesheet">
</head>
<body>
    <div class="container"> 
        <div id="cabecalho">
            <img class="logo" src="imagens/profile-man.png" width="5%" alt="logo">
            <h3>Listagem de Pessoas</h3>
        </div>
        <div style="margin-left: 10px; margin-top: 30px">
            <a id="bot" href="/estudoJaison/CadastroPessoaForm.php" ><input id="bot" type="button" value="Cadastrar"></a>
        </div>
        <div class="consulta">
            <?php
            if ($dados->num_rows > 0) {
                $i = 0;
                echo "<table><tr class=titulo><th>ID</th><th>Nome</th><th>Idade</th><th>E-mail</th><th>Celular</th><th>Sexo</th><th>Ação</th></tr>";
                while($row = $dados->fetch_assoc()) {
                    echo "<tr class=dados>
                            <td>".$row['idpessoa']."</td>
                            <td>".$row['nome']."</td>
                            <td>".$row['idade']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['celular']."</td>
                            <td>".$row['sexo']."</td>
                            <td>
                                <a id=delete href=PessoaDelete.php?id=".$row['idpessoa']."><img src=imagens/delete.png width=20px>
                                <a id=update href=PessoaUpdateForm.php?id=".$row['idpessoa']."><img src=imagens/update.png width=20px>
                            </td>
                            </tr>";
                        $i += 1;
                        } if($i == 1) {
                            echo "<td colspan='7' class=msg; >Foi encontrado " .$i." registro</td></table>";
                        }else {echo "<td colspan='7' class=msg>Foram encontrados " .$i." registros</td></table>";
                        }
            }
            else {
                echo "Sem Registro.";
            }
            ?>
        </div>
    </div>
</body>
</html>