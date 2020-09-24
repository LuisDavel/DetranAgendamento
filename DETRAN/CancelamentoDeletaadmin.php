

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
            $cpf= $_GET['id'];
                   //
            $sql = "SELECT * FROM agenda WHERE id = '$cpf'";
            //echo $sql;
            $retorno = mysqli_query($con, $sql);
            

            if(!(mysqli_num_rows($retorno))) {
                echo '<BR> <BR> <BR> <BR> CPF inválido  <a href="Consulta.php">VOLTAR</a>' ;
            }else{
                $sql = "SELECT agenda.id,agenda.horas, agenda.data, agenda.assunto FROM agenda WHERE id = '$cpf'";
                $retorno = mysqli_query($con, $sql);
                if(mysqli_num_rows($retorno)){ 
                    while($item = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {

        ?> 
        Você possui um agendamento:
        <br><br>
              
            <div> <!-- CPF Cancelamento -->
                <label for="Data">Data:</label>
                <p class="paragrafo"><?php echo ($item['data']) ?></p>
            </div>
            <div > <!-- CPF Cancelamento -->
                <label for="Data">Horario:</label>
                <p class="paragrafo"><?php echo ($item['horas']) ?></p>
            </div>
            <div > <!-- CPF Cancelamento -->
                <label for="Data">Serviço Solicitado:</label>
                <p class="paragrafo"><?php echo ($item['assunto']) ?></p>
            </div>
           
            <?php 
                        }
                        
                    }
            ?>
            <form action="Cancelamentodbadm.php" method="post">
			    <input type="hidden" name="id" value="<?php echo $cpf; ?>">
                <b> Deseja mesmo cancelar? </b> <br>
			    <input type="submit" id="btn" class="botao" value="Sim">
		    	<a href="Consulta.php"><input type="button" id="btn" class="botao" value="Não"></a>
	    	</form>
	
            
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
