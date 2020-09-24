<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti ,João Paulo Preis e Gustavo Borba-->
<!DOCTYPE html>
<html lang="pt_br">
<head>

    
    <link rel="stylesheet" type="text/css" href="Css\CssSheetConsulta.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" /> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  <!-- Linkado a página do Jquery (Mascaras Tel,Cpf,etc) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js%22%3E"></script>  <!-- Linkado a página do Jquery (Editar os inpust,forms, etc) -->


    
    <meta name="burg" content="width=device-width, initial-scale=1">
    <title>Ciretran Consulta</title>

</head>
<body>

    
    </form>
    <header id="Cabeçalho">
            
    </header>

    <nav id="Navegador"> <!-- Barra de navegação em cima -->
                <a href="index.html">INICIO</a>  
    </nav>
    <form id="corpo" action="Cancelamento.php" method="post">
        <fieldset id="cancelamento">
            Insira suas informações de login.
            <br><br>
                <div > <!-- CPF Cancelamento -->
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="cpf form-control" style="width: 10em" value="" placeholder="Ex.: 000.000.000-00" autocomplete="off"required>
                </div>
                <br>
               
                <br>
                <button type="submit" name="submit" id="btn" class="botao">Pesquisa</button> <!-- Botão de ação -->

        </fieldset>
    </form>

             
    
    
    <footer id="Rodapé">
    <p>© 2020 TI 6ª DRP - Todos os Direitos Reservados</p>
    </footer>
</body>


<!-- Mask CPF -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
</script>
<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->