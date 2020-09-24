<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css\CssSheetCancelamento.css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  <!-- Linkado a página do Jquery (Mascaras Tel,Cpf,etc) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js%22%3E"></script>  <!-- Linkado a página do Jquery (Editar os inpust,forms, etc) -->

    <?php
        include('conexao.php');
    ?>
    <title>Ciretran Consulta</title>

</head>
<body>
    <header id="Cabeçalho">
            
    </header>

    <nav id="Navegador"> <!-- Barra de navegação em cima -->
                <a href="index.html">INICIO</a>  
    </nav>

    <fieldset id="cancelamento">
        <?php
            $cpf= $_POST['cpf'];
                   //
            $sql = "SELECT * FROM agenda WHERE CPF = '$cpf'";
            $retorno = mysqli_query($con, $sql);
            //echo $sql."\n";

            if(!(mysqli_num_rows($retorno))) {

                echo '<BR> <BR> <BR> <BR> CPF inválido  <a href="Consulta.php">VOLTAR</a>' ;
            }else{
                $sql = "SELECT cpf, nome, horas, data FROM agenda";
                $retorno = mysqli_query($con, $sql);
                if(mysqli_num_rows($retorno)){ 
                    while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {

        ?> 
            Você possui um agendamento na:
            <br><br>
            <div> <!-- CPF Cancelamento -->
                <label for="Data">Data:</label>
                <p class="paragrafo"><?php echo ($item['data']) ?></p>
                <p>------------------------------------------------</p>
            </div>
            <div > <!-- CPF Cancelamento -->
                <label for="Data">Horario:</label>
                <p class="paragrafo"><?php echo ($item['horas']) ?></p>
                <p>------------------------------------------------</p>
            </div>
            <br>
            <div> <!-- CPF Cancelamento -->
                <label for="Data">Nome:</label>
                <p class="paragrafo"><?php echo ($item['nome']) ?></p>
                <p>------------------------------------------------</p>
            </div>
            <div > <!-- CPF Cancelamento -->
                <label for="Data">CPF:</label>
                <p class="paragrafo"><?php echo ($item['cpf']) ?></p>
                <p>------------------------------------------------</p>
            </div>
            <br>
               
        <?php 
                        }
                    }
        ?>

            <button type="button" name="submit" id="btn" class="botao">Cancelar agendamento? </button> 
            
            
        <?php
                }
        ?>
    
    <footer id="Rodapé">
    <p>© 2020 TI 6ª DRP - Todos os Direitos Reservados</p>
    </footer>
</body>


<!-- Mask CPF -->
<script>
    $('.cpf').mask('000.000.000-00');
</script>

<!-- Mask data -->
<script>
    $('.data').mask('0000/00/00');
</script>

<!-- Mask horario -->
<script>
    $('.hora').mask('00:00');
</script>
<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->