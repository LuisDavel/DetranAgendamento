<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->
<?php

  include('conexao.php');
  error_reporting(0);
  $agenda ='';
  $transito = 3;
  $CNH = 1;
  $retirada = 1;
  $Licencia = 1;
  $certidao = 1;
  if(@$_GET['dataAjax'] != ""){
    /*/*cada categoria possui um horario pra mudar so alterar no codigo*/
    
    if(@$_GET['assunto']=='CNH Geral'){ // horario CNH Geral
        $agenda = $CNH;
        $horarios = array(
            '12:15:00'=>"<option value='12:15:00'>12:15</option>",
            '12:30:00'=>"<option value='12:30:00'>12:30</option>",
            '12:45:00'=>"<option value='12:45:00'>12:45</option>",
            '13:00:00'=>"<option value='13:00:00'>13:00</option>",
            '13:15:00'=>"<option value='13:15:00'>13:15</option>",
            '13:30:00'=>"<option value='13:30:00'>13:30</option>",
            '13:45:00'=>"<option value='13:45:00'>13:45</option>",
            '14:00:00'=>"<option value='14:00:00'>14:00</option>",
            '14:15:00'=>"<option value='14:15:00'>14:15</option>",
            '14:30:00'=>"<option value='14:30:00'>14:30</option>",
            '14:45:00'=>"<option value='14:45:00'>14:45</option>",
            '15:00:00'=>"<option value='15:00:00'>15:50</option>",
            '15:15:00'=>"<option value='15:15:00'>15:15</option>",
            '15:30:00'=>"<option value='15:30:00'>15:30</option>",
            '15:45:00'=>"<option value='15:45:00'>15:45</option>",
            '16:00:00'=>"<option value='16:00:00'>16:00</option>",
            '16:15:00'=>"<option value='16:15:00'>16:15</option>",
            '16:30:00'=>"<option value='16:30:00'>16:30</option>",
            '16:45:00'=>"<option value='16:45:00'>16:45</option>",
            '17:00:00'=>"<option value='17:00:00'>17:00</option>",
            '17:15:00'=>"<option value='17:15:00'>17:15</option>",
            '17:30:00'=>"<option value='17:30:00'>17:30</option>",
            '17:45:00'=>"<option value='17:45:00'>17:45</option>"
          );  
    }
    if(@$_GET['assunto']=='Retirada de Documentos'){//Horairo para retirada de documentos
        $agenda = $retirada;
        $horarios = array(
            '12:10:00'=>"<option value='12:10:00'>12:10</option>",
            '12:20:00'=>"<option value='12:20:00'>12:20</option>",
            '12:30:00'=>"<option value='12:30:00'>12:30</option>",
            '12:40:00'=>"<option value='12:40:00'>12:40</option>",
            '12:50:00'=>"<option value='12:50:00'>12:50</option>",
            '13:00:00'=>"<option value='13:00:00'>13:00</option>",
            '13:10:00'=>"<option value='13:10:00'>13:10</option>",
            '13:20:00'=>"<option value='13:20:00'>13:20</option>",
            '13:30:00'=>"<option value='13:30:00'>13:30</option>",
            '13:40:00'=>"<option value='13:40:00'>13:40</option>",
            '13:50:00'=>"<option value='13:50:00'>13:50</option>",
            '14:00:00'=>"<option value='14:00:00'>14:00</option>",
            '14:10:00'=>"<option value='14:10:00'>14:10</option>",
            '14:20:00'=>"<option value='14:20:00'>14:20</option>",
            '14:30:00'=>"<option value='14:30:00'>14:30</option>",
            '14:40:00'=>"<option value='14:40:00'>14:40</option>",
            '14:50:00'=>"<option value='14:50:00'>14:50</option>",
            '15:00:00'=>"<option value='15:00:00'>15:00</option>",
            '15:10:00'=>"<option value='15:10:00'>15:10</option>",
            '15:20:00'=>"<option value='13:20:00'>15:20</option>",
            '15:30:00'=>"<option value='15:30:00'>15:30</option>",
            '15:40:00'=>"<option value='15:40:00'>15:40</option>",
            '15:50:00'=>"<option value='15:50:00'>15:50</option>",
            '16:00:00'=>"<option value='16:00:00'>16:00</option>",
            '16:10:00'=>"<option value='16:10:00'>16:10</option>",
            '16:20:00'=>"<option value='16:20:00'>16:20</option>",
            '16:30:00'=>"<option value='16:30:00'>16:30</option>",
            '16:40:00'=>"<option value='16:40:00'>16:40</option>",
            '16:50:00'=>"<option value='16:40:00'>16:50</option>",
            '17:00:00'=>"<option value='17:00:00'>17:00</option>",
            '17:10:00'=>"<option value='17:10:00'>17:10</option>",
            '17:20:00'=>"<option value='17:20:00'>17:20</option>",
            '17:30:00'=>"<option value='17:30:00'>17:30</option>",
            '17:40:00'=>"<option value='17:40:00'>17:40</option>",
            '17:50:00'=>"<option value='17:50:00'>17:50</option>"
          );
    }
    if(@$_GET['assunto']=='Licenciamento veicular anual'){//horario para licenciamento veicular
        $agenda = $Licencia;
        $horarios = array(
            '12:15:00'=>"<option value='12:15:00'>12:15</option>",
            '12:30:00'=>"<option value='12:30:00'>12:30</option>",
            '12:45:00'=>"<option value='12:45:00'>12:45</option>",
            '13:00:00'=>"<option value='13:00:00'>13:00</option>",
            '13:15:00'=>"<option value='13:15:00'>13:15</option>",
            '13:30:00'=>"<option value='13:30:00'>13:30</option>",
            '13:45:00'=>"<option value='13:45:00'>13:45</option>",
            '14:00:00'=>"<option value='14:00:00'>14:00</option>",
            '14:15:00'=>"<option value='14:15:00'>14:15</option>",
            '14:30:00'=>"<option value='14:30:00'>14:30</option>",
            '14:45:00'=>"<option value='14:45:00'>13:30</option>",
            '15:00:00'=>"<option value='15:00:00'>13:45</option>",
            '15:15:00'=>"<option value='15:15:00'>14:00</option>",
            '15:30:00'=>"<option value='15:30:00'>14:15</option>",
            '15:45:00'=>"<option value='15:45:00'>14:15</option>",
            '16:00:00'=>"<option value='16:00:00'>14:30</option>",
            '16:15:00'=>"<option value='16:15:00'>13:30</option>",
            '16:30:00'=>"<option value='16:30:00'>13:45</option>",
            '16:45:00'=>"<option value='16:45:00'>14:00</option>",
            '17:00:00'=>"<option value='17:00:00'>14:15</option>",
            '17:15:00'=>"<option value='17:15:00'>14:15</option>",
            '17:30:00'=>"<option value='17:30:00'>14:15</option>",
            '17:45:00'=>"<option value='17:45:00'>14:15</option>"
          );

    }
    if(@$_GET['assunto']=='Tranferência veicular geral'){//horario para transferencia geral
        $agenda = $transito;
        $horarios = array(
            '12:10:00'=>"<option value='12:10:00'>12:10</option>",
            '12:40:00'=>"<option value='12:40:00'>12:40</option>",
            '13:10:00'=>"<option value='13:10:00'>13:10</option>",
            '13:40:00'=>"<option value='13:40:00'>13:40</option>",
            '14:10:00'=>"<option value='14:10:00'>14:10</option>",
            '14:40:00'=>"<option value='14:40:00'>14:40</option>",
            '15:10:00'=>"<option value='15:10:00'>15:10</option>",
            '15:40:00'=>"<option value='15:40:00'>15:40</option>",
            '16:10:00'=>"<option value='16:10:00'>16:10</option>",
            '16:40:00'=>"<option value='16:40:00'>16:40</option>",
            '17:10:00'=>"<option value='17:10:00'>17:10</option>",
            '17:40:00'=>"<option value='14:40:00'>17:40</option>"
          );

    }
    if(@$_GET['assunto']=='Certidões'){//horario para certidões
        $agenda  = $certidao;
        $horarios = array(
            '12:15:00'=>"<option value='12:15:00'>12:15</option>",
            '12:30:00'=>"<option value='12:30:00'>12:30</option>",
            '12:45:00'=>"<option value='12:45:00'>12:45</option>",
            '13:00:00'=>"<option value='13:00:00'>13:00</option>",
            '13:15:00'=>"<option value='13:15:00'>13:15</option>",
            '13:30:00'=>"<option value='13:30:00'>13:30</option>",
            '13:45:00'=>"<option value='13:45:00'>13:45</option>",
            '14:00:00'=>"<option value='14:00:00'>14:00</option>",
            '14:15:00'=>"<option value='14:15:00'>14:15</option>",
            '14:30:00'=>"<option value='14:30:00'>14:30</option>",
            '14:45:00'=>"<option value='14:45:00'>14:45</option>",
            '15:00:00'=>"<option value='15:00:00'>15:50</option>",
            '15:15:00'=>"<option value='15:15:00'>15:15</option>",
            '15:30:00'=>"<option value='15:30:00'>15:30</option>",
            '15:45:00'=>"<option value='15:45:00'>15:45</option>",
            '16:00:00'=>"<option value='16:00:00'>16:00</option>",
            '16:15:00'=>"<option value='16:15:00'>16:15</option>",
            '16:30:00'=>"<option value='16:30:00'>16:30</option>",
            '16:45:00'=>"<option value='16:45:00'>16:45</option>",
            '17:00:00'=>"<option value='17:00:00'>17:00</option>",
            '17:15:00'=>"<option value='17:15:00'>17:15</option>",
            '17:30:00'=>"<option value='17:30:00'>17:30</option>",
            '17:45:00'=>"<option value='17:45:00'>17:45</option>"
          );  
    }
  
    $retorno = "";

    foreach ($horarios as $key => $value) {
      $sqlData = mysqli_query($con, "SELECT * FROM agenda WHERE data = '".$_GET['dataAjax']."' and horas = '" .$key."' and assunto = '".$_GET['assunto']."'");
      if (!(mysqli_num_rows($sqlData)> $agenda)) {
         $retorno .= $value;
      } else {
        $retorno .= "<option value='".$key."' disabled>".$key." horário ocupado</option>";
      }
    }
    exit($retorno);
  } 

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css\CssSheetAgenda.css" media="screen" /> <!-- Linkado a página do CSS -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" /> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script> <!-- Linkado a página do Jquery (Calendário) -->
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  <!-- Linkado a página do Jquery (Mascaras Tel,Cpf,etc) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js%22%3E"></script>  <!-- Linkado a página do Jquery (Editar os inpust,forms, etc) -->
    
    <script>    // ---- Tradução das datas FUNC DONO
        var diasSemana = [ "Domingo", "Segunda", "Terca", "Quarta", "Quinta", "Sexta", "Sabado" ];
        var diasFinalSemana = [ "Domingo", "Sabado" ];
        var datasIndisponiveis = [
            new Date(2015, 07, 26),
            new Date(2015, 07, 27),
            new Date(2015, 08, 05)
        ].map(function (data) {
            return data.getTime();
        });

        $(function() {

            $("#calendario").datepicker({
                dateFormat: 'yy/mm/dd',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                beforeShowDay: function(data){        
                    var diaSemana = diasSemana[data.getDay()];
                    var isDataIndisponivel = datasIndisponiveis.indexOf(data.getTime()) != -1;
                    var isDataFinalSemana = diasFinalSemana.indexOf(diaSemana) != -1;
                    return [!isDataIndisponivel && !isDataFinalSemana];
                },
                minDate: 0,
                maxDate: 30,
                //showOn: "button",
                buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                buttonImageOnly: true,
                onSelect: function(dateText) {
                  $.get( "Agenda.php", { 'dataAjax': dateText, 'assunto': $('.assunto-agendamento').val() }, function( data ) {
                    $('.horario-agendamento').html(data);
                  });
                }
            });
            
            showOtherMonths: true;
            selectOtherMonths: true;
        });
        </script>
    <title>Ciretran</title>
</head>

<body>


    <div id="Resolução"> <!-- Tentativa de deixar o site não quebrado -->

        <header id="Cabeçalho">
            <!-- Não tem nada aqui -->
        </header>

        <nav id="Navegador"> <!-- Barra de navegação em cima  -->
            <a href="index.html">INICIO</a>

        </nav>
        <br>
        <section id="Corpo"> <!-- Corpo do HTML -->
            <form action="enviar.php" method="post"> 
                <div class="coluna1"> <!-- Segunda coluna -->
                    <fieldset class="campo">
                        <div class="campo"> <!-- Cidade no formulário -->
                            <label for="cidade">Cidade</label> 
                            <select name="cidade" id="cidade" onchange="liberamenu(),limpa_coluna()">
                                <option value="">--</option>
                                <option value="Criciúma">Criciúma</option>
                                <option value="Forquilhinha">Forquilhinha</option>
                                <option value="Nova Veneza">Nova Veneza</option>
                                <option value="Sideropólis">Sideropólis</option>
                                <option value="Treviso">Treviso</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="campo"> <!-- Referente ao Assunto a ser tratado no Detran (Serviço) -->
                        <div class="campo">
                            <label for="Assunto">Assunto</label> 
                            <select name=menu  id="menu" class = "assunto-agendamento" onchange="verifica(), verificaBox()">
                                <option value="1">--</option>
                                <option value="CNH Geral">CNH Geral</option>
                                <option value="Retirada de Documentos">Retirada de Documentos</option>
                                <option value="Licenciamento veicular anual">Licenciamento veicular anual</option>
                                <option value="Tranferência veicular geral">Transferência veicular geral</option>
                                <option value="Certidões">Certidões</option>
                            </select>
                        </div>
                    </fieldset>
                     <p id="renova"></p><br>
                    <p id="p1">*Leia atentamente a documentação escrita no quadrado abaixo e marque a caixa de seleção pra prosseguir.</p>
                    
                </div> <!-- Fim do css Coluna1 --> 

                <!-- Docuemntação para questão da pessoa -->
                <div class="coluna3" id="coluna3">
                    <p id="paragrafo"></p>
                </div>
                <!-- Fim da coluna3 (Documentação Pessoa) -->
                
                <div class="coluna2" id="coluna"> <!-- Segunda coluna -->
                   <!-- Forumlário metodo POST --> 
                        <fieldset>
                            <fieldset class="grupo">
                                <div class="campo"> <!-- Nome no formulário -->
                                    <label for="nome">Nome completo</label>
                                    <input type="text" id="nome" name="nome" style="width: 10em" value="" placeholder="Ex.: Carlos Miranda" autocomplete="off"required>
                                </div>
                                <!-- //// --> 
                                <div class="campo"> <!-- Nome no formulário -->
                                    <label for="cpf">CPF</label>
                                    <input type="text" id="cpf" name="cpf" class="cpf form-control" style="width: 10em" value="" placeholder="Ex.: 000.000.000-00" autocomplete="off"required >
                                </div>
                            </fieldset>
                            <!-- //// --> 

                            <div class="campo"> <!-- Email no formulário -->
                                <label for="email">E-mail</label> 
                                <input type="email" id="email" name="email" style="width: 15em" value="" placeholder="Ex:. exemplo@hotmail.com" autocomplete="off">
                            </div>
                            <!-- //// --> 
                            <div class="campo"> <!-- Telefone no formulário -->
                                <label for="telefone">Telefone</label> 
                                <input type="tel" id="telefone" class="telefone form-control" name="telefone" style="width: 10em" value="" placeholder="Ex:. (48)00000-0000" autocomplete="off" required>
                            </div>
                            <!-- //// --> 

                            <div class="campo"> <!-- Calendario no formulário -->
                                <label for="Data">Data</label>
                                <input type="text" id="calendario" class="data form-control data-agendamento" name="calendario" style="width: 10em" autocomplete="off" placeholder="Aperte para obter a data"  required onclick= "validarCPF()" readonly="readonly">
                            </div> 
                           

                            <fieldset class="campo">
                                <div class="campo"> <!--Horário no formulário -->
                                <select name=horario id="horario" class="horario-agendamento" >
                                        <option value="1">Selecione um horário</option>
                                       <!--  <option value="12:15:00">12:15</option>
                                        <option value="12:30:00">12:30</option>
                                        <option value="12:45:00">12:45</option>
                                        <option value="13:00:00">13:00</option>
                                        <option value="13:15:00">13:15</option>
                                        <option value="13:30:00">13:30</option>
                                        <option value="13:45:00">13:45</option>
                                        <option value="14:00:00">14:00</option>
                                        <option value="14:15:00">14:15</option>
                                        <option value="14:30:00">14:30</option>
                                        <option value="14:45:00">14:45</option>
                                        <option value="15:00:00">15:00</option>
                                        <option value="15:15:00">15:15</option>
                                        <option value="15:30:00">15:30</option>
                                        <option value="15:45:00">15:45</option>
                                        <option value="16:00:00">16:00</option>
                                        <option value="16:15:00">16:15</option>
                                        <option value="16:30:00">16:30</option>
                                        <option value="16:45:00">16:45</option>
                                        <option value="17:00:00">17:00</option>
                                        <option value="17:15:00">17:15</option>
                                        <option value="17:30:00">17:30</option>
                                        <option value="17:45:00">17:45</option> -->
                                    </select>
                                </div>
                            </fieldset>
                            <!-- //// --> 
                            
                            <br><br>

                            <button type="submit" name="submit" id="btn" class="botao">Enviar</button> <!-- Botão de ação -->
                        </fieldset>
                </div>
                <!-- Fim do css Coluna2 -->         
            </form>
            <!-- Fim do forumlário -->
        </section>
        <!-- Fim do corpo --> 
    </div>
    <!-- Fim resolução --> 
    
<footer id="Rodapé">
    <p>© 2020 TI 6ª DRP - Todos os Direitos Reservados</p>
</footer>

</body>
</html>

<!-- Bloqueia a interação do usuário com as caixas de informações por não estarem preenchido o campo do menu-->
<script>
    // Some com a div e o Btn
    window.onload=document.getElementById("btn").hidden = true;
    window.onload=document.getElementById("coluna").hidden= true;
    window.onload=document.getElementById("p1").hidden= true;
    //Desabilita os componentes
    window.onload=document.getElementById("menu").disabled=true;
    window.onload=document.getElementById("nome").disabled = true;
    window.onload=document.getElementById("email").disabled = true;
    window.onload=document.getElementById("telefone").disabled = true;
    window.onload=document.getElementById("cpf").disabled= true;
    window.onload=document.getElementById("horario").disabled = true;
    window.onload=document.getElementById("calendario").disabled = true;
    window.onload=document.getElementById("btn").disabled = true;
    window.onload=document.getElementById("renova").innerHTML = "";
    // Seta valor
    window.onload=document.getElementById("cidade").value=0;
    window.onload=document.getElementById("menu").value=0;
</script>
<!-- Fim Script -->
<script>
    function limpa_coluna()
    {
            document.getElementById("nome").value="";   
            document.getElementById("nome").value="";   
            document.getElementById("email").value="";   
            document.getElementById("telefone").value="";   
            document.getElementById("cpf").value="";   
            document.getElementById("horario").value="";   
            document.getElementById("calendario").value="";   
    }
</script>

<!-- Script* Libera menu assuntos Flavio Pirola-->
<script>
    function liberamenu(){
        var libera=document.getElementById("cidade").value;
        if(libera!="")
        {
            document.getElementById("menu").value=1;
            document.getElementById("menu").disabled=false;
        }
        else{
            document.getElementById("menu").disabled=true;
            document.getElementById("menu").value=1;
 
            document.getElementById("nome").disabled = true;
            document.getElementById("email").disabled = true;
            document.getElementById("telefone").disabled = true;
            document.getElementById("cpf").disabled= true;
            document.getElementById("horario").disabled = true;
            document.getElementById("calendario").disabled = true;
            document.getElementById("btn").disabled = true;
            document.getElementById("horario").value = 1;
            document.getElementById("coluna").hidden= true;
            document.getElementById("p1").hidden = true;
            document.getElementById("paragrafo").innerHTML = "";


        }
    }                 
</script>
<!-- Fim Script -->

<!-- Script* Desativa as caixas de seleções e de escrever-->
<script>
    function verifica(){
        var valorMenu = document.getElementById("menu").value;
        var Checkbox = document.getElementById("check");
        if(valorMenu!="1"){
            console.log("Script Desabilitou");
            document.getElementById("nome").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("telefone").disabled = false;
            document.getElementById("cpf").disabled= false;
            document.getElementById("horario").disabled = false;
            document.getElementById("calendario").disabled = false;
            document.getElementById("btn").disabled = false;
            // Volta o div, btn e p1 
            document.getElementById("btn").hidden = false;
            document.getElementById("p1").hidden = false;
        }else{

            document.getElementById("nome").disabled = true;
            document.getElementById("email").disabled = true;
            document.getElementById("telefone").disabled = true;
            document.getElementById("cpf").disabled= true;
            document.getElementById("horario").disabled = true;
            document.getElementById("calendario").disabled = true;
            document.getElementById("btn").disabled = true;
            // Seta valor 
            document.getElementById("cidade").value = 1;
            document.getElementById("horario").value = 1;
           
            
            // Div e btn somem
            document.getElementById("coluna").hidden = true;
            document.getElementById("btn").hidden = true;
            document.getElementById("p1").hidden = true;
            document.getElementById("renova").disabled = true;
            // Apaga paragrafo
            document.getElementById("renova").innerHTML = "";
            document.getElementById("nome").innerHTML = "";
        }


        
    }
</script>
<script>
    function chamacheck(valor){
        var status = document.getElementById("coluna").hidden;
        var Checkbox = document.getElementById("check");
        if(valor == 'sim' && !status ){
            document.getElementById("coluna").hidden= true;
            document.getElementById("check").checked=false;
            console.log("Coluna off")
        }else{
            document.getElementById("coluna").hidden= false;
            console.log("Coluna Open")

        }
    }

    function verificaCidade(){
        var cidadeCombo = document.getElementById("cidade");
        // For igual a um e tals ...
    }
</script>
<!-- Fim Script -->

<script>
    function verificaBox(){ 
        console.log("Deu certo");
        var valorMenu = document.getElementById("menu").value;
        if(valorMenu != 1){
            switch (valorMenu) {
                case "CNH Geral": document.getElementById("paragrafo").innerHTML = `<h4>CNH Geral</\h4>
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                            -Cópia da CNH e cópia de um comprovante de residência de preferência que esteja em nome da pessoa que irá renovar. Caso seja no nome do cônjuge, trazer cópia da certidão de casamento. Caso seja locatário, trazer consigo cópia do contrato de locação. Também servirá se trouxer uma declaração de residência autenticada no cartório, sendo o locador declarando pro locatário.<br>
                                                                                            -De outros estados para SC, trazer consigo cópia da CNH, comprovante de residência e cópia da identidade.
                                                                                            <br>
                                                                                            <b>OBS.: NÃO SERÁ ACEITO CÓPIA DA CTPS ( CARTEIRA DE TRABALHO ).</b><br>
                                                                                            <b>Trazer os documentos originais para a comparar com a cópia.</b>
                                                                                          <br>---------------------------------------------------------------------------------;<br>
                                                                                          <b>*Você pode também renovar pela internet basta <a href="https://servicos.detran.sc.gov.br/">clicar aqui.</a></b>;<br>
                                                                                          <br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`
                                                                                           

                break;
                case "Retirada de Documentos": document.getElementById("paragrafo").innerHTML= `<br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`

                break;
                case "Licenciamento veicular anual": document.getElementById("paragrafo").innerHTML= `<b>*Você pode imprimir seu documento atráves do Detran Digital basta <a href="https://servicos.detran.sc.gov.br/">clicar aqui.</a></b>;<br>
                                                                                            <br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`
                                                                                           
                break;
                case "Tranferência veicular fisica": document.getElementById("paragrafo").innerHTML = `<h4>TRANSFERÊNCIA DE VEÍCULOS – PESSOA FÍSICA</h4> 
                                                                                            ---------------------------------------------------------------------------------<br>
                                                                                           - PAGAMENTO IPVA ADIANTADO <b>(Mesmo que não esteja vencido)</b>.<br>
                                                                                           - RECIBO DE COMPRA E VENDA ORIGINAL PREENCHIDO E RECONHECIDO EM CARTÓRIO.<br>
                                                                                           - CÓPIA RG E CPF OU CNH DO NOVO PROPRIETÁRIO. <br>
                                                                                           - COMPROVANTE DE RESIDÊNCIA ATUAL DE NO MÁXIMO 90 DIAS.<br>
                                                                                           - VISTORIA FEITA.  <br>
                                                                                           <b>*Caso o comprovante estiver em nome de terceiros, trazer declaração de residência autenticada em cartório pelo titular do comprovante.
                                                                                            <br>Se for cônjuge, certidão de casamento.</b><br>
                                                                                           <b>***Somente o proprietário novo poderá dar entrada na documentação de transferência, salvo se houver um procurador, neste caso, trouxer procuração original e cópia do RG e CPF ou CNH do procurador.***</b>      
                                                                                           TAXA DA TRANSFERÊNCIA 	 R$ 151,44	
                                                                                           <br>PRAZO PARA ENTREGA DO DOCUMENTO 10 DIAS ÚTEIS        
                                                                                           <br>
                                                                                           ---------------------------------------------------------------------------------;
                                                                                           <br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`
                break;
                     
                case "Tranferência veicular juridica": document.getElementById("paragrafo").innerHTML = `<h4>TRANSFERÊNCIA DE VEÍCULOS – PESSOA JURÍDICA</\h4>
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                          - PAGAMENTO IPVA ADIANTADO <b>(Mesmo que não esteja vencido)</b><br>
                                                                                          - RECIBO DE COMPRA E VENDA ORIGINAL PREENCHIDO E RECONHECIDO EM CARTÓRIO<br> 
                                                                                          - CÓPIA RG E CPF OU CNH DO ADMINISTRADOR <br>
                                                                                          - CARTÃO CNPJ<br>
                                                                                          - CÓPIA E ORIGINAL CONTRATO SOCIAL<br>
                                                                                          - VISTORIA FEITA. <br>
                                                                                          <b>***Somente o administrador poderá dar entrada na documentação de transferência, salvo se houver um procurador, neste caso, trazer procuração original e cópia do RG e CPF ou CNH do procurador.***</b><br>
                                                                                          
                                                                                          TAXA DA TRANSFERÊNCIA 	 R$ 151,44.<br>	
                                                                                          PRAZO PARA ENTREGA DO DOCUMENTO   10 DIAS ÚTEIS.
                                                                                          <br>---------------------------------------------------------------------------------;
                                                                                          <br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`
                                                                                             
                break;
                case "Tranferência veicular geral": document.getElementById("paragrafo").innerHTML = `<h4>TRANSFERÊNCIA DE INVENTÁRIO</h4>
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                          - PAGAMENTO IPVA ADIANTADO <b>(Mesmo que não esteja vencido)</b>.<br>
                                                                                          - RECIBO DE COMPRA E VENDA ORIGINAL EM BRANCO.<br>
                                                                                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>* Se não tiver, a CIRETRAN solicita</b>.<br>
                                                                                          - CÓPIA RG E CPF OU CNH DE TODOS OS HERDEIROS. <br>
                                                                                          - COMPROVANTE DE RESIDÊNCIA ATUAL DE NO MÁXIMO &nbsp;90 DIAS.<br>
                                                                                          - DOCUMENTOS DO INVENTÁRIO/ESPÓLIO/FORMAL DE PARTILHA, CONSTANDO A PLACA DO VEÍCULO E A PARTILHA <b>(QUANTOS % PARA CADA HERDEIRO)</b>.<br>
                                                                                          - VISTORIA FEITA.<br> 
                                                                                                          
                                                                                          <b>***Somente os herdeiros poderão dar entrada na documentação de transferência.***</b><br><br>
                                                                                                          
                                                                                          TAXA DA TRANSFERÊNCIA R$ 151,44.	<br>
                                                                                          PRAZO PARA ENTREGA DO DOCUMENTO   10 DIAS ÚTEIS.<br>
                                                                                          ---------------------------------------------------------------------------------<br>          
                                                                                          <h4>TRANSFERÊNCIA LEILÃO</h4>
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                          - PAGAMENTO IPVA ADIANTADO <b>(Mesmo que não esteja vencido)</b>.<br>
                                                                                          - DECLARAÇÃO ORIGINAL COM O NÚMERO DO CRV. <br>
                                                                                          - CÓPIA RG E CPF OU CNH DO PROPRIETÁRIO. <br>
                                                                                          - COMPROVANTE DE RESIDÊNCIA ATUAL DE NO MÁXIMO 90 DIAS<br>
                                                                                           		<b>Caso o comprovante estiver em nome de terceiros, trazer declaração de residência autenticada em cartório pelo titular do comprovante</b>.<br>
                                                                                                <b>Se for cônjuge, certidão de casamento</b>.<br>
                                                                                          - EDITAL DO LEILÃO <b>(Site do DETRAN)</b>.<br>
                                                                                          - MEMORIAL DESCRITIVO <b>(Site do DETRAN)</b>.<br>
                                                                                          - NOTA FISCAL OU NOTA DE VENDA ORIGINAL, ASSINADA PELO LEILOEIRO.<br>
                                                                                          - VISTORIA FEITA.<br> 
                                                                                          <b>***Somente o proprietário poderá dar entrada na documentação de transferência, salvo se houver um procurador, neste caso, trazer procuração original e cópia do RG e CPF ou CNH do procurador.***</b><br><br>
                                                                                                          
                                                                                          TAXA DA TRANSFERÊNCIA 	 R$ 151,44	<br>
                                                                                          PRAZO PARA ENTREGA DO DOCUMENTO   10 DIAS ÚTEIS.<br>
                                                       
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                          <h4>2ª VIA CRV – RECIBO - DUT</h4>
                                                                                          ---------------------------------------------------------------------------------<br>
                                                                                          - REQUERIMENTO DO PROPRIETÁRIO/ADMINISTRADOR/PROCURADOR <b>(Fornecido pela Ciretran)</b>.<br>
                                                                                          - CÓPIA RG E CPF OU CNH <b>(Proprietário/Administrador ou Procurador)</b>.<br>
                                                                                          - COMPROVANTE DE RESIDÊNCIA ATUAL DE NO MÁXIMO 90 DIAS <b>(Cartão CNPJ se Pessoa Jurídica)</b>.<br>
                                                                                           		-Caso o comprovante estiver em nome de terceiros, trazer declaração de residência autenticada em cartório pelo titular do comprovante.<br>
                                                                                          		-Se for cônjuge, certidão de casamento.<br>
                                                                                          -CONTRATO SOCIAL <b>(Se for Pessoa Jurídica)</b>.<br>
                                                                                          - VISTORIA FEITA. <br>
                                                                                                          
                                                                                          <b>***Somente o proprietário/administrador poderá dar entrada no processo de 2ª via, salvo se houver um procurador, neste caso, trazer procuração original e cópia do RG e CPF ou CNH do procurador.***</b><br><br>
                                                                                                          
                                                                                          TAXA DA SEGUNDA VIA 	 R$ 366,81<br>	
                                                                                          PRAZO PARA ENTREGA DO DOCUMENTO 10 DIAS ÚTEIS
                                                                                          <br>
                                                                                          <br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`
                break;
                case "CNH Geral" : document.getElementById("renova").innerHTML = `*Você pode também renovar pela internet basta <a href="https://servicos.detran.sc.gov.br/">clicar aqui.</a>`;
                break;
                case "Certidões": document.getElementById("paragrafo").innerHTML= `<br><input type = "checkbox" id = "check" nome = "validacao" onclick = "chamacheck('sim')">
                                                                                           <label for = "Renovação"> Estou ciente sobre a documentação </label>`;break;
                
            }
        }else{
            document.getElementById("paragrafo").innerHTML= "";
            document.getElementById("renova").innerHTML = "";
        }
    }
</script>
<!-- Fim script VerificaBox -->
    
<!-- Mask CPF -->
<script>
    $('.cpf').mask('000.000.000-00');
</script>

<!-- Mask Telefone -->
<script>
    $('.telefone').mask('(00) 00000-0000');
</script>

<!-- Mask data -->
<script>
    $('.data').mask('0000/00/00');
</script>
<!-- Diretos Resevados á Jailton Junior Serafim de Oliveira, Flávio Leandro Pirola, Luis Davel Biagetti,João Paulo Preis e Gustavo Borba-->