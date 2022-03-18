<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#bot').click(function() {
        if (! $("input[type='radio'][name='sexo']").is(':checked') ){
            alert("Preencha todos os campos.");
            return false;
            }
        });
        }); 
    </script>
</head>
<body>
    <div class="box">
        <div class="cabcad">
            <img class="logo" src="imagens/profile-man.png" width="60px" alt="logo">
            <h2>Cadastro de Pessoas</h2>
        </div>
        <div>
            <form class="formcad" action="CadastroPessoasFormDO.php" method="post">
                <table class="tabcad">  
                    <tr>
                        <td>
                            <div class="nome">
                                <label for="nome">Nome</label><br/>
                                <input type="text" id="nome" name="nome" autocomplete="off" required name="nome" placeholder="informe seu nome">
                            </div>
                        </td>
                        <td>
                            <div class="idade">
                                <label for="idade">Idade</label><br/>
                                <input type="number" id="idade" name="idade" autocomplete="off" required name="idade" placeholder="informe sua idade">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="email">
                                <label for="email">E-mail</label><br/>
                                <input type="email" id="email" name="email" autocomplete="off" required name="email" placeholder="informe seu e-mail">
                            </div>
                        </td>
                        <td>
                            <div class="celular">
                                <label for="celular">Celular</label><br/>
                                <input type="number" id="celular" name="celular" autocomplete="off" required name="celular" placeholder="informe seu celular">
                            </div>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="sexo">
                                <label for="sexo">Sexo</label><br/>
                                    <input id="sexo" type="radio" name="sexo" value="masculino"/>Masculino
                                    <input id="sexo" type="radio" name="sexo" value="feminino"/>Feminino
                            </div>
                        </td>
                    </tr> 
                </table>
                <div class="botao">
                    <a id="botao"><input id="bot" type="submit" value="Cadastrar"></a>
                </div>
            </form>
        </div>
    </div>
   
</body>
</html>