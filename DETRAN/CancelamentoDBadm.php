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
    <?php
        
		$id = $_POST['id'];
		
		$sql = "DELETE FROM agenda WHERE id = '$id'";
		
		$retorno = mysqli_query($con, $sql);
		if (!$retorno) {
			header('Location:   adm.php?erro=1&msg=' . mysqli_error($con));
			//echo 'Cliente não foi excluído! Erro: ' . mysqli_error($con);
		} else {
			header('Location: Cancelamentoadmin.php?sucesso=1&msg=' . $id);
			//echo 'Cliente excluído com sucesso! Cliente código: ' . $id;
		}
	?>
    <fieldset id="cancelamento">
               
        <b>Aguarde...</b>
      
           
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