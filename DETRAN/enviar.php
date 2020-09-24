<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti ,João Paulo Preis e Gustavo Borba-->
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css\CssSheetEnviar.css" media="screen" />
    <title>Cadastro</title>

    <?php
	    include('conexao.php');
    ?>

    <?php
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data = $_POST['calendario'];
        $horario = $_POST['horario'];
        $cpf= $_POST['cpf'];
        $cidade= $_POST['cidade'];
        $menu= $_POST['menu']; 
        $dataAgora = date('Y/m/d');
        $check = null;
        $HoraAgora = date('H:i');
   //
   
   if($cpf == ""){
      header('Location: Agenda.php');
       
   }else{
       
   
    $sql = "SELECT * FROM agenda WHERE assunto = '$menu' && horas = '$horario' && data = '$data' && cpf = '$cpf'";
    $retorno = mysqli_query($con, $sql);
        if(mysqli_num_rows($retorno) > 0) {
            header('Location: Agenda.php');

        }else{
            $sql = "INSERT INTO agenda VALUE (null, '$name','$cpf', '$telefone', '$email', '$cidade','$check','$dataAgora','$HoraAgora','$horario','$data','$menu')";

            $retorno = mysqli_query($con, $sql);

            if (!$retorno) {
                echo 'Cliente não foi cadastrado! Erro: ' .mysqli_error($con);
            } else {
    ?>

</head>
<body>

    <header >
            <div id="img">
                <img id="imag" src="Imagens/LogoDetran.png"alt="">
            </div>
    </header>
    
    <nav id="Navegador"> <!-- Barra de navegação em cima -->
            
            <a href="index.html">Inicio</a>
                
    </nav>

    <div id="Resolução">
    <section id="Corpo">
        <?php // DIV PHp >>>>>>
                    echo ' <div id="DivPHP">'." 
                            <table>
                                <tr>
                                    <th>Agendamento feito com sucesso!</th>
                                </tr>
                                <tr>
                                    <th> Nome: </th>
                                    <td>$name</td>
                                </tr>
                                <tr>
                                    <th> CPF: </th>
                                    <td> $cpf</td>                      
                                </tr>
                                <tr>
                                    <th> Cidade de atendimento: </th>
                                    <td> $cidade</td>                      
                                </tr>
                                <tr>
                                    <th> Data de agendamento: </th>
                                    <td> $data</td>                      
                                </tr>
                                <tr>
                                    <th> Horário de atendimento: </th>
                                    <td> $horario</td>                      
                                </tr>
                                <tr>
                                    <th> Serviço: </th>
                                    <td> $menu</td>                      
                                </tr>
                                <tr>
                                    <th> CODIGO DE REGISTRO </th>
                                    <td>".mysqli_insert_id($con)."</td>                      
                                </tr>
                          </table>
                          </div>";
                }
            }
        }    
        ?>
    </section>    
    </div>
</body>
</html>    
    


<?php
    mysqli_close($con);
?>
<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->