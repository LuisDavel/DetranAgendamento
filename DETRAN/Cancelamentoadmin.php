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
        <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..."/>
            <button id="btnBusca">Buscar</button>
        <div>
        <?php
            $usuario= $_POST['usuario'];
            $senha = $_POST['senha'];
            
            $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha ='$senha'";
            $retorno = mysqli_query($con, $sql);
            //echo $sql."\n";

            if(!(mysqli_num_rows($retorno))) {

                echo '<BR> <BR> <BR> <BR> CPF inválido  <a href="Consulta.php">VOLTAR</a>' ;
            }else{
                $sql = "SELECT agenda.horas, agenda.data, agenda.cpf, agenda.nome, agenda.id FROM agenda";
                $retorno = mysqli_query($con, $sql);
                if(mysqli_num_rows($retorno)){ 
                    while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {

        ?> 
       
        <br><br>
            
            <tr>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['cpf']; ?></td>
                <td><?php echo $item['data']; ?></td>
                <td><?php echo $item['horas']; ?></td>
				<td><a href="CancelamentoDeletaadmin.php?id=<?php echo $item['id']; ?>">Excluir</a></td>
                <br>
            </tr>
            <?php 
                        }
                    }
            ?>

            <button type="button" name="submit" id="btn" class="botao">Cancelar agendamento? </button> 
            
            
            <?php
                }
            ?>

           
        </fieldset>
       
    
    <footer id="Rodapé">
    <p>© 2020 TI 6ª DRP - Todos os Direitos Reservados</p>
    </footer>
</body>


<!-- Mask CPF -->
<script>
    $('.cpf').mask('000.000.000-00');
</script>
<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->