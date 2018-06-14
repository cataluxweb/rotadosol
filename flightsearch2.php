
<html>
<head>
	<title>Rota do Sol Passagens</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
        <!--teste-->
          <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui2.js"></script>

        <!--fim do teste-->
        
        
            <!-- Theme Styles -->


    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
    

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">     


<style>

body { 
  background: url(backgroundteste.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: #F60;
	height: 18px;
	padding:10px;
}
</style>
   
        
</head>
<body>
	<h1><img src="img/logo.png"></h1>
	
	<div class="main-agileinfo">
    
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>TRECHO ESCOLHIDO <strong style="color:#000;"><?=$partida?> &rArr; <?=$chegada?></strong></span></li>
					<!--<li class="resp-tab-item"><span>SÓ IDA</span></li>-->
					<!--<li class="resp-tab-item"><span>Multi city</span></li>-->				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
	
					<div class="tab-1 resp-tab-content oneway">
                    

							<div class="from" style="width:100%;">
                            
                                                <table width="100%" border="1">
                                                
                                                  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td colspan="5" style="color:#FFF3DF; font-weight:bold;"><h3>IDA de <strong style="color:#000;"><?=$partida?></strong> para <strong style="color:#000;"><?=$chegada?></strong></h3></td>
    </tr>

  </tbody>	
                                                
                      <!--<form action="../admin/seatmaps/index33.php" method="post">-->
                            <form action="seatmaps/mapaida.php" method="post">             

                     
  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td rowspan="2"><br/><img width="94" height="110" src="images/4.png"></td>
      <td colspan="3"><br/><h4><?=$partida_iata?> para <?=$chegada_iata?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$assentos_livres?> Assentos Disponíveis&nbsp;&nbsp;&nbsp;<span>R$ <?=$tarifa?> (por pessoa) *tarifas já inclusas</span></h4></td>
    </tr>
    <tr>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">flight_takeoff</i><br>
      	<span class="skin-color">Decolagem</span><br /><?=$diadoembarque?><br/> <?=$embarque?>
      </td>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">flight_land</i><br>
        <span class="skin-color">Pouso</span><br /><?=$landday?> <br/> <?=$landtime?>
      </td>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">access_time</i><br>
        <span class="skin-color">Tempo de Voo</span><br /><?=$tempodevoo?><br/>
        <!--<a href="buyflight2.php?idvoo=iddele" class="button btn-small full-width" style="color:#0700B4;">COMPRE AGORA</a>-->

		<input type="radio" id="id<?=$idvoo?>" name="ida" value="<?=$loc?>/<?=$anv?>" required onclick="yesno('id<?=$idvoo?>','labelida<?=$idvoo?>');"> <label id="labelida<?=$idvoo?>" for="id<?=$idvoo?>">Quero esse Voo</label>
		
        
		        
      </td>
    </tr>
  </tbody>		                     

  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td colspan="5"><br/><h4>NÃO HÁ MAIS VOOS COM A QUANTIDADE SOLICITADA DE ASSENTOS!!!</h4></td>
    </tr>
    <tr>
      <td colspan="5"><br/><h4>Tente outro período ou uma menor quantidade de assentos.</h4></td>
    </tr>    
  </tbody>	



    
    
    

    
							<div class="from" style="width:100%;">
                            
                                                <table width="100%" border="1">
                                                
                                                  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td colspan="5" style="color:#FFF3DF; font-weight:bold;"><h3>VOLTA de <strong style="color:#000;"><?=$chegada?></strong> para <strong style="color:#000;"><?=$partida?></strong></h3></td>
    </tr>
    
    
    

                     
                     
  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td rowspan="2"><br/><img width="94" height="110" src="images/4.png"></td>
      <td colspan="3"><br/><h4><?=$chegada_iata?> para <?=$partida_iata?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$assentos_livres?> Assentos Disponíveis&nbsp;&nbsp;&nbsp;<span>R$ <?=$tarifa2?> (por pessoa) *tarifas já inclusas</span></h4></td>
    </tr>
    <tr>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">flight_takeoff</i><br>
      	<span class="skin-color">Decolagem</span><br /><?=$diadoembarque2?><br/> <?=$embarque2?>
      </td>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">flight_land</i><br>
        <span class="skin-color">Pouso</span><br /><?=$landday2?> <br/> <?=$landtime2?>
      </td>
      <td>
      	<i class="material-icons" style="font-size:24px;color:yellow;">access_time</i><br>
        <span class="skin-color">Tempo de Voo</span><br /><?=$tempodevoo2?><br/>
        <!--<a href="buyflight2.php?idvoo=iddele" class="button btn-small full-width" style="color:#0700B4;">COMPRE AGORA</a>-->
        
        <input type="radio" id="id<?=$idvoo2?>" name="volta" required value="<?=$loc?>/<?=$anv?>"> <label for="id<?=$idvoo2?>">Quero esse Voo</label>
        
      </td>
    </tr>
  </tbody>		                     	
    


  <tbody style="border-bottom: 1px solid #000;  padding-top:10px; margin-top: 20px; font-weight:bold;">
    <tr>
      <td colspan="5"><br/><h4>NÃO HÁ MAIS VOOS COM A QUANTIDADE SOLICITADA DE ASSENTOS!!!</h4></td>
    </tr>
    <tr>
      <td colspan="5"><br/><h4>Tente outro período ou uma menor quantidade de assentos.</h4></td>
    </tr>    
  </tbody>	
	
             
                                  
 
  
</table>

								<!--<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">-->
							</div>


							<div class="clear"></div>
                                 
                                
                                        
                                    <a href="index.php" target="_self" class="button">REFAZER SUA BUSCA</a>					
                                    <input type="hidden" name="pob" value="<?=$quantidade?>"/>
                                    <input type="hidden" name="pob_total" value="<?=$quantidade?>"/>
                                    
                                    <input type="hidden" name="classe" value="<?=$tarifa_comprada?>"/>
                            
                            			<input type="submit" value="CONTINUAR A COMPRA DE SUA PASSAGEM"/>   
                                        

    
                            
						</form>	
                        
                        

                        
                        
                        
								
					</div>
					
	
				</div>						
			</div>
		</div>
	</div>
	<div class="footer-w3l">
    
          <div align="center" style="text-align:center;">
          		<a href="/bilhete/seatmaps/politica.php" target="_blank" style="text-decoration:none">Conheça nossa política de cancelamentos</a>
          </div>
    
        <p class="agileinfo"> &copy; Todos os direitos reservados a Rota do Sol CNPJ 01.904.715/0001-31 <br/>
        Tels: <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(85)996059699">+55 (85) 99605.9699 / (85) 98773.0470</a> <br/> Powered by <a href="http://catalux.com.br/">CataLux WebServices</a></p>
		<!--<p class="agileinfo"> &copy; 2016 Flight Ticket Booking. Powered by <a href="http://catalux.com.br/">CataLux WebServices</a></p>-->
	</div>
	<!--script for portfolio-->
		<script src="js/jquery.min.js"> </script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker({ dateFormat: "dd/mm/yy" });
						  });
				  </script>
			<!-- //Calendar -->
			<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=0) divUpd.text(newVal);
									});
									</script>
								<!--//quantity-->
						<!--load more-->
								<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>


<!-- //load-more -->

<script>
function yesno2(thecheckbox, thelabel){
	//alert(thelabel);
	
	 $('#id29').text("Teste");
            var checkboxvar = document.getElementById(thecheckbox);
            var labelvar = document.getElementById(thelabel);
            if (checkboxvar.checked == false){
              
			  	
				$( "label[id*='label']" ).val( "has man in it!" );
				document.getElementById(thelabel).innerHTML = 'NOT';
				
            }else{
                
				document.getElementById(thelabel).innerHTML = 'OK';
            }
        }

</script>



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


</body>
</html>

