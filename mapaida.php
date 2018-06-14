
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<link rel="stylesheet" type="text/css" media="all" href='../css/jquery_air3.css' />



<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>


    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/datatables.min.css"> 

<link rel="stylesheet" href="css/normalize.min.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />



  

<style>


body { 
  background: url(backgroundteste.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}


.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 500px;
	position: relative;
	margin: 5% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}


.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }



/*para o acordion*/
.accordion {
    background-color:#FFC832;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #F90;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}






* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('css/searchicon.png');
  background-position: 0px 0px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 12px;
  
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


/*.dataTables_filter, .dataTables_info { display: none; }*/
.dataTables_filter { display: none; }

</style>





  <script src='js/jquery.min.js'></script>




    <title>ROTA DO SOL</title>













<script type="text/javascript" language="javascript">


	function checkin(id, localizador, anv){
	
//alert("Escolha foi: "+ id);
    var person = prompt("FAZER CHECK-IN DE PASSAGEIRO\nAssento escolhido: "+id+"\nAeronave: "+anv+"\nLocalizador do voo: "+localizador+"\n\nDIGITE: assento/peso(Kg) da mala de mão/peso(Kg) TOTAL da bagagem a ser despachada/portão de embarque/senha administrativa/taxa de bagagem*\n* Campo opcional", "seat/hand/bagage/gate/password/weighttax");
    
	var inform = (person.toUpperCase()).split("/");
	var senha = inform[0] + inform[4];
	var hand = inform[1];
	var bagage = inform[2];
	var gate = inform[3];
	var wt = inform[5];
	
    if (senha != id+"74224034387") {
		//erro
		alert("Chave de Seguranca ERRADA\nO CHECK-IN do assento "+ id +" não foi realizado!\nChave informada: "+senha);
    } else {
		//ok
		//alert("Escolha correta: "+ id);
		//window.location="printckeckin.php?id="+id+"&codigo="+localizador+"&anv="+anv+"&hand="+hand+"&bagage="+bagage;
		
		window.open("printckeckin.php?id="+id+"&codigo="+localizador+"&anv="+anv+"&hand="+hand+"&bagage="+bagage+"&gate="+gate+"&wt="+wt, "_blank","toolbar=no,scrollbars=yes,resizable=yes,top=10,left=10,width=600,height=500");
		
    }
//window.open("http://www.entrega.com?id="+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=10,left=10,width=400,height=400");

}




	function incomplete(id, localizador, anv){
	

		alert("NÃO É POSSIVEL FAZER SEU CHECK-IN!!!\nOS DADOS DO PASSAGEIRO DO ASSENTO "+id+" estão INCOMPLETOS.\n\nPor favor, preencha todos os dados para prosseguir com o check-in!");

}




	function apagarid(id, localizador, anv){
	
//alert("Escolha foi: "+ id);
    var person = prompt("Informe o ASSENTO e Senha Administrativa para LIBERAR esse assento \nAssento escolhido: "+id+"\nAeronave: "+anv+"\nLocalizador do voo: "+localizador+"\n\nATENÇÃO!!!\nVocê está apagando em definitivo os dados desse passageiro para esse voo!", "ID+Senha Admin");
    
    if (person != id+"74224034387") {
		//erro
		alert("Chave de Seguranca ERRADA\nO assento "+ id +" está mantido!");
    } else {
		//ok
		//alert("Escolha correta: "+ id);
		window.location="delseat.php?id="+id+"&codigo="+localizador+"&anv="+anv;
		
		
    }
//window.open("http://www.entrega.com?id="+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=10,left=10,width=400,height=400");

}



	function changestatus(id, valor){
	
//alert("Escolha foi: "+ id);
	var valor = valor.value; 
		
    var person = prompt("Informe o ID(Voo) e Senha Administrativa para ALTERAR o STATUS desse Voo\nO ID desse Voo é: "+id +" e o STATUS que será setado é: "+ valor, "ID+Senha Admin");
    
    if (person != id+"74224034387") {
		//erro
		alert("Chave de Seguranca ERRADA\nO STATUS do Voo "+ id +" esta mantido!");
		location.reload();
    } else {
		//ok
		//alert("Escolha correta: "+ id);
		if(valor == "CANCELADO" || valor == "ATRASADO"){
			var motivo = prompt("INFORME O MOTIVO PARA QUE ESSE VOO ESTEJA NO STATUS " + valor, "Por favor, informe o motivo!");
			while (motivo == "" || motivo == null || motivo == "Por favor, informe o motivo!") {
 				 var motivo = prompt("Por favor informe o motivo para Status do Voo está em " + valor + "\nSe quiser cancelar a mudança do status digite: cmd revert ", "");
				 
				var strg = motivo;
				var comando = strg.split(' ')[0];		
				var executar = strg.split(' ')[1];		
						 
				 if (comando == "cmd"){
					 
					 //verifica comando prompt
					 
					 if(executar == "revert"){
						 //alert("cancela mudanca de status!!!");
						 //location.reload();
						 window.location="addvoos.php";
						 
					 } else {
						 alert("Comando Inválido!!!");
						 motivo = "";
						 break;
					 }
					 
				 	
				 } else if (comando == "" || comando == null ){
					 
					 alert("Comando Inválido!!!");
						 motivo = "";
				 
				 }else{
					 
					//alert("informou o motivo"); 
					//window.location="niveluser.php?id="+id+"&valor="+valor;
					//alert("libera com motivo 1 !!!");
					window.location="statusflight.php?id="+id+"&valor="+valor+"&mot="+motivo;
					
				 }
				 
			}	
		
			//alert("libera com motivo 2 !!!");
			window.location="statusflight.php?id="+id+"&valor="+valor+"&mot="+motivo;
			
		} else {
			
			//alert("libera sem motivo!!!");
			window.location="statusflight.php?id="+id+"&valor="+valor+"&mot= ";
			
		}
		
		//
		 //
		
    }


//window.open("http://www.entrega.com?id="+id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=10,left=10,width=400,height=400");

}





</script>
<!--termina teste css-->    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">   
    
  </head>

	<!--autoajust de valores por tarifa escolhida pelo usuário-->
  <body onload="retornata()">


      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->







    
    
    
  <div class="plane">
  <div class="cockpit">
    <h1>Escolha seu Assento</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">


	
                    <li class="row row--<?=$fim?>">
      					<ol class="seats" type="<?=strtoupper(chr(97+$f))?>">

                
 
					 
       									 <li class="seat">
          				    				  <input type="checkbox" id="<?=strtoupper($valor.chr(97+$x))?>" href="#openModal" value="<?=strtoupper($valor.chr(97+$x))?>" onclick='handleClick(this);' />
        									  <label for="<?=strtoupper($valor.chr(97+$x))?>"><?=strtoupper($valor.chr(97+$x))?></label>
       									 </li>			
        
 
					 
       									 <li class="seat">
          				    				  <input type="checkbox" disabled id="<?=strtoupper($valor.chr(97+$x))?>" href="#openModal" value="<?=strtoupper($valor.chr(97+$x))?>" onclick='handleClick(this);' />
        									  <label for="<?=strtoupper($valor.chr(97+$x))?>" style="background:#999; color:#FFF; cursor:not-allowed;"><?=strtoupper($valor.chr(97+$x))?></label>
       									 </li>			
        
             
                        
                        </ol>
                        
                      </li>

    
  </ol>
  <div class="exit exit--back fuselage">
    
  </div>
  
  <div></div>
  <div></div>
  <div>
  <form action="../index.php">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="VOLTAR">
</form>  
  </div>

  
  
 
</div>



</div>



<?php
//dados complementares para o voo
$sqlflight= $link->query("SELECT * FROM flight WHERE localizador = '$localizador'");
				if(mysqli_num_rows($sqlflight) > 0){
					
					while ($rowflight = $sqlflight->fetch_assoc()) {
						$taxaVoo = $rowflight["taxa"];
						$assentoVoo = $rowflight["assento"];
						$tarifaCheia = $rowflight["tarifa"];
						$tarifaPromo = $rowflight["tarifa_promocional"];
						$assentosPromo = $rowflight["total_promocional"];
						
						$seat_tax = str_replace(",", ".", $assentoVoo);
						
						$flight_tax = str_replace(",", ".", $taxaVoo);
						
					}
					
				}

?>




<!--MODAL SEAT-->

<div id="openModal" class="modalDialog">
	<div>
		<!--<a href="#close" title="Close" class="close">X</a>-->
       <form action="seatconfirm.php" method="post">
       
       <input type="hidden" name="last_id" value="<?=$last_id?>" required readonly/>
       
       <input type="hidden" name="loc" value="<?=$localizador?>" required readonly/>
       <input type="hidden" name="anv" value="<?=$anv?>" required readonly/>
       
       <input type="hidden" name="volta_loc" value="<?=$volta_loc?>" required readonly/>
       <input type="hidden" name="volta_anv" value="<?=$volta_anv?>" required readonly/>
   
		<h2>Dados do Passageiro</h2> 
		<!--
        <p><strong>Tafira pretendida:</strong> 
        
        <select name="classe" id="classe" onChange="calcular2()">
        					<?php
								if($classe == "B"){
							?>
        						<option value="B">Básica - Não Reembolsável</option>
                             <option value="F">Flexível - Reembolsável</option>
        					<?php
								}else{
							?>
                            	<option value="F">Flexível - Reembolsável</option>
        						<option value="B">Básica - Não Reembolsável</option>
                             
                         <?php
								}
							?>
                         
        					
                         
                         
        			</select>
                    </p>
                    -->
                    <input type="hidden" name="classe" id="classe" value="<?=$classe?>"/>
                    
        <p><strong>Tipo de Passageiro:</strong> <select name="tipo">
        					<option value="C">Passageiro Comum</option>
                         <option value="E">Portador de Necessidades Especiais</option>
                         <option value="O">Criança menor de 12 anos</option>
                         
        			</select>
					</p>
        <p><strong>Assento:</strong> <input type="text" id="assento_escolhido" name="assento_escolhido" value="Assento não selecionado!!!" style="background-color:#CCC; border:none; width:40px;" width="40px" required readonly/>&nbsp;&nbsp;&nbsp;<strong>Nascimento:</strong> <input type="text" id="nascimento" name="nascimento" style="width:90px;" width="90px" required />&nbsp;&nbsp;&nbsp;Sexo: <select name="sexo">
        					<option value="M">Masculino</option>
                         <option value="F">Feminino</option>
                         
        			</select>
        
        </p>
        <p><strong>Nome do Passageiro:</strong> <input type="text" id="nome_passageiro" name="nome_passageiro" style="text-transform:uppercase; width:300px;" width="300px;" required/></p>
        <p><strong>DOC:</strong>
        
                <select name="tipodoc">
        					<option value="RG">RG</option>
                         <option value="CPF">CPF</option>
                         <option value="PASS">PASSAPORT</option>
                         <option value="ANAC">ANAC</option>
                         <option value="TITULO">TITULO</option>
                         <option value="RESER">RESERVISTA</option>
                         <option value="CARTTRAB">C.TRABALHO</option>
                         <option value="CARTPROF">C.PROFISSIONAL</option>
                         <option value="CONSELHO">CONSELHO</option>
                         
        			</select>
        
        <input type="text" id="doc_passageiro" name="doc_passageiro" style="text-transform:uppercase; width:220px;" width="220px;"required />&nbsp;&nbsp;
		<input type="hidden" name="pob" value="<?=$pob?>"/>
       <input type="hidden" name="pob_total" value="<?=$pob_total?>"/>
       
       <input type="hidden" name="quando" value="<?=$quando?>"/> 
        
        </p>
        <p><strong>Telefone do Passageiro:</strong> <input type="text" id="telefone_passageiro" name="telefone_passageiro" required /></p>
        <p><strong>Email do Passageiro:</strong> <input type="email" id="email_passageiro" name="email_passageiro" style="text-transform:lowercase; width:280px;" width="280px" required/></p>
        <p><strong>Valor do Bilhete:</strong> <span id="agora">R$ <?=$assentoVoo?></span> (Assento) +  R$ <?=$taxaVoo?> (Taxas) = <strong>R$ <span id="agora_final"><?=$tarifaCheia?></span> </strong></p>
        <input type="hidden" name="valor_bilhete" id="valor_bilhete_setado" />
        <hr>
        <p><strong>Nome do Contato:</strong> <input type="text" id="nome_contato" name="nome_contato" style="text-transform:uppercase; width:300px;" width="300px" required/></p>
        <p><strong>Telefone do Contato:</strong> <input type="text" id="telefone_contato" name="telefone_contato" required /></p>
		<p>Todas as informações acima devem estar corretas a fim de evitar problemas no momento do CHECK-IN.</p>
        <p><input type="submit" id="submit" value="CONFIRMAR ASSENTO"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="CANCELAR" onClick="Cancelou();"/></p>
        </form>
	</div>
</div>





<script>

function Cancelou(){
	

	
	var teste = document.getElementById("assento_escolhido").value;
	alert("Desistindo do assento:" + teste);
	
	window.location='#close';
	
	document.getElementById(teste).checked = false;
	
	//para resetar valor escolhido pelo usuario
	retornata();
	
}




function handleClick(cb) {
  //display("Clicked, new value = " + cb.checked);
  



  if (cb.checked==true){
	 
  	//alert("Clicked, new value = " + cb.checked + " O Assento escolhido foi: " + cb.value);
	
	//document.getElementById("teste").value = "Assento escolhido foi" + cb.value;
	
	document.getElementById("assento_escolhido").value = cb.value;
	
	window.location='#openModal';
	
	
  }else{
	alert("Assento desmarcado!!!");  
  }

  
  
  
  
  //window.location=document.getElementById('#openModal').href;
  
  
}





function handleClick2(cb) {
  //display("Clicked, new value = " + cb.checked);
  

	var valoraeditar = (document.getElementById("edassento_"+cb.value).value).trim();
	
	var camposEd = valoraeditar.split("|");
	
	var contato = camposEd[4].split("(");
	
	
	document.getElementById("assento_escolhido").value = cb.value;
	

	document.getElementById("nome_passageiro").value = camposEd[0].trim();
	document.getElementById("doc_passageiro").value = camposEd[1].trim();
	document.getElementById("telefone_passageiro").value = camposEd[2].trim();
	document.getElementById("email_passageiro").value = camposEd[3].trim();
	document.getElementById("nome_contato").value = contato[0].trim();
	document.getElementById("telefone_contato").value = "("+contato[1];
	document.getElementById("valor_bilhete").value = camposEd[5].trim();
	document.getElementById("nascimento").value = camposEd[6].trim();
	document.getElementById("sexo").value = camposEd[7].trim();
	document.getElementById("classe").value = camposEd[8].trim();
	document.getElementById("tipo").value = camposEd[9].trim();
	window.location='#openModal';
	

  
  
}



function handleClick3(cb) {
  //display("Clicked, new value = " + cb.checked);
  

	
	
	document.getElementById("assento_escolhido").value = cb.value;
	


	window.location='#openModal';
	

  
  
}


</script>                
                
                
                <!--AQUI FINALIZA O BLOCO TODO -->
                
                
                
                
                




</div>






<script>


  function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i, occurrence;

      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
     for (i = 0; i < tr.length; i++) {
         occurrence = false; // Only reset to false once per row.
         td = tr[i].getElementsByTagName("td");
         for(var j=0; j< td.length; j++){                
             currentTd = td[j];
             if (currentTd ) {
                 if (currentTd.innerHTML.toUpperCase().indexOf(filter) > -1) {
                     tr[i].style.display = "";
                     occurrence = true;
                 } 
             }
         }
        
	 
		 if(!occurrence){
             tr[i].style.display = "none";
         } 
		 
		 
     }
   }
</script>



      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
          
          <div align="center" style="text-align:center;">
          		<a href="/bilhete/seatmaps/politica.php" target="_blank" style="text-decoration:none">Conheça nossa política de cancelamentos</a>
          </div>
          
        <p class="agileinfo"> &copy; Todos os direitos reservados a Rota do Sol CNPJ 01.904.715/0001-31 <br/>
        Tels: <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(85)996059699">+55 (85) 99605.9699 / (85) 98773.0470</a> <br/> Powered by <a href="http://catalux.com.br/">CataLux WebServices</a></p>
		<!--<p class="agileinfo"> &copy; 2016 Flight Ticket Booking. Powered by <a href="http://catalux.com.br/">CataLux WebServices</a></p>-->
          </div>
      </footer>
      <!--footer end-->
  </section>
  
  
  	<div>
		<script language='javascript'>
			function vopenw() {	
				tbar='location=no,status=yes,resizable=yes,scrollbars=yes,width=560,height=535';	
				sw =  window.open('https://www.certisign.com.br/seal/splashcerti?dn=pagamento.rotadosoltaxi.com.br','CRSN_Splash',tbar);	
				sw.focus();
			}
		</script>
		<a href='javascript:vopenw()'>
	        	<img style="margin-right: 23px; margin-top: 14px; float: left;" src='/images/100x46_fundo_branco.gif' border=0 align=center alt='Um site validado pela Certisign indica que nossa empresa concluiu satisfatoriamente todos os procedimentos para determinar que o domínio validado é de propriedade ou se encontra registrado por uma empresa ou organização autorizada a negociar por ela ou exercer qualquer atividade lícita em seu nome.'>
		</a>
		<script src=https://seal.verisign.com/getseal?host_name=pagamento.rotadosoltaxi.com.br&size=S&use_flash=NO&use_transparent=getsealjs_b.js&lang=pt></script>
	</div>

    
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.tables.js"></script>



    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  



function ativarCreate() {
    var x = document.getElementById("myHOTRAN");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

  </script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<script src='js/vanilla-masker.min.js'></script>
<script >function inputHandler(masks, max, event) {
	var c = event.target;
	var v = c.value.replace(/\D/g, '');
	var m = c.value.length > max ? 1 : 0;
	VMasker(c).unMask();
	VMasker(c).maskPattern(masks[m]);
	c.value = VMasker.toPattern(v, masks[m]);
}

var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
var tel = document.querySelector('#telefone_passageiro');
VMasker(tel).maskPattern(telMask[0]);
tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

/*
var telMask2 = ['999.999.999-99', '99.999.999/9999-99'];
var tel2 = document.querySelector('#doc_passageiroOLD');
VMasker(tel2).maskPattern(telMask2[0]);
tel2.addEventListener('input', inputHandler.bind(undefined, telMask2, 14), false);
*/

var telMask3 = ['(99) 9999-99999', '(99) 99999-9999'];
var tel3 = document.querySelector('#telefone_contato');
VMasker(tel3).maskPattern(telMask3[0]);
tel3.addEventListener('input', inputHandler.bind(undefined, telMask3, 14), false);

var docMask = ['99/99/9999'];
var doc = document.querySelector('#nascimento');
VMasker(doc).maskPattern(docMask[0]);
doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);


//# sourceURL=pen.js
</script>  

<script src="jquery.priceformat.min.js"></script>
<script>

$('#valor_bilhete').priceFormat({
    prefix: '',
    centsSeparator: ',',
    thousandsSeparator: ''
});

</script>


<script type="text/javascript">

function calcular2() {
	
  var ta = document.getElementById('classe').value;
  
  if(ta == "B"){
	  var n4 = Number(0,10);
  }else{
	  //TAXA FLEX
	  var n4 = Number(<?=$adicional_flex?>,10);
  }
  var n3 = Number(<?=$seat_tax?>, 10);
  //var n4 = Number(document.getElementById('n4').value, 10);
  var n5 = Number(<?=$flight_tax?>, 10);
  
  var soma_atual = n3 + n4;
  
  var soma_atual_final = n3 + n4 + n5;
  
  	//com R$
	var f = soma_atual.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

	//sem R$
	var f2 = soma_atual_final.toLocaleString('pt-br', {minimumFractionDigits: 2});
  	
	document.getElementById('agora').innerHTML = f;
	document.getElementById('agora_final').innerHTML = f2;
	//document.getElementById('valor_bilhete').value = f2;
	document.getElementById('valor_bilhete_setado').value = f2;
	
}


function retornata() {
	
  var ta = "<?=$classe?>";
  
  if(ta == "B"){
	  var n4 = Number(0,10);
  }else{
	  //TAXA FLEX
	  var n4 = Number(<?=$adicional_flex?>,10);
  }
  var n3 = Number(<?=$seat_tax?>, 10);
  //var n4 = Number(document.getElementById('n4').value, 10);
  var n5 = Number(<?=$flight_tax?>, 10);
  
  var soma_atual = n3 + n4;
  
  var soma_atual_final = n3 + n4 + n5;
  
  	//com R$
	var f = soma_atual.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

	//sem R$
	var f2 = soma_atual_final.toLocaleString('pt-br', {minimumFractionDigits: 2});
  	
	document.getElementById('agora').innerHTML = f;
	document.getElementById('agora_final').innerHTML = f2;
	//document.getElementById('valor_bilhete').value = f2;
	document.getElementById('valor_bilhete_setado').value = f2;
}

</script>

  </body>
</html>
