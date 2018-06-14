
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>.:RotadoSol:.</title>
</head>

<style>

body { 
  background: url(backgroundteste2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
}

.button {
  color: #545454;
}

</style>

<body>

<div style="text-align:center; width:100%;">

<h1><img src="../img/logo.png"></h1>

<h2 style="color:#F16900;">RESUMO DAS PASSAGENS A SEREM EMITIDAS</h2>
<hr>

                        <strong>TRECHO: </strong>&nbsp;<span style="color:#FF6500;"><?=strtoupper($trecho)?></span>
                        <br/>
                        <strong>LOCALIZADOR: </strong>&nbsp; <span style="color:#FF6500;"><?=$localizador?> </span>
                        <br/>
                        <strong>AERONAVE: </strong>&nbsp; <span style="color:#FF6500;"><?=$anvfim?>(<?=$anv[1]?>)</span>
                        <br/>
                        <strong>DECOLAGEM: </strong>&nbsp; <span style="color:#FF6500;"><?=$decolagem?> (Horário Local)</span>
                        <br/>

                                <strong><?=$total_bloqueado?> ASSENTOS ESCOLHIDOS: </strong>&nbsp; <span style="color:#FF6500;"><?=$assentos?></span>
                        			<br/>
                                
 
										<strong><?=$key?>: </strong>&nbsp;<span style="color:#FF6500;"><?=trim(strtoupper($seat[0]))?>&nbsp;&nbsp;(<?=trim($seat[1])?>)</span>
                        				<br/>
    
                        <strong>VALOR A SER PAGO: </strong>&nbsp; <span style="color:#FF6500;"><?=$valortrecho?></span>
                        <br/>
                        <strong>CÓDIGO DE VERIFICAÇÃO: </strong>&nbsp; <span style="color:#FF6500;"><?=$cod?></span>

                        <hr>
 
<strong>Emails a serem encaminhados os E-Tickets(VOUCHER´s): </strong> <span style="color:#FF6500;"><?=substr(strtolower($emails),0,-1)?></span>
<br/>
<strong>Telefones de Contato: </strong> <span style="color:#FF6500;"><?=substr($telefones,0,-2)?></span>
<br/>
<strong>Localizadores gerados: </strong> <span style="color:#FF6500;"><?=substr($localizadores,0,-1)?></span>
<br/>
<strong>Valor total a pagar:</strong> <span style="color:#FF6500;">R$ <?=$valor_a_pagar?> *</span>
<br/>
<span style="color:#FF6500; font-style:italic;">
* No valor acima já está incluído as taxas de embarque, no entanto poderá haver cobrança extra sobre a bagagem, se esta estiver além da franquia adquirida.
</span>
<br/>
<br/>

		<form method="POST" action="capture.php">
		    <script type="text/javascript"
		        src="https://assets.pagar.me/checkout/checkout.js"
		        data-amount="<?=$valortotal?>"
		        data-encryption-key="ek_test_AE2dwqmvJVOPVlhnm0hG5KifKVsjoV"
		        data-customer-data="true"
		        data-create-token="true"
		        data-payment-methods="credit_card"
		        data-max-installments="4"
				data-ui-color="#eb8b0f"
		        data-button-text="Comprar suas Passagens">
		    </script>
            <input type="hidden" name="valordacompra" value="<?=$valortotal?>"/>
            <input type="hidden" name="localizadores" value="<?=$localizadores?>"/>
            <input type="hidden" name="emails" value="<?=strtolower($emails)?>"/>
		</form>
<br/>
<br/>
<a href="../index.php" target="_self" class="button">CANCELAR BILHETES</a>	
<br/>
<br/>
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
</div>




  
  
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



<!--
<form method="POST" action="/comprar">
    <script type="text/javascript"
        src="https://assets.pagar.me/checkout/checkout.js"
        data-button-text="Pagar"
        data-encryption-key="SUA_ENCRYPTION_KEY"
        data-amount="1000"
        data-customer-data="true"
        data-payment-methods="boleto,credit_card"
        data-ui-color="#eb8b0f"
        data-postback-url="requestb.in/1234"
        data-create-token="true"
        data-interest-rate="12"
        data-free-installments="3"
        data-default-installment="5"
        data-header-text="Título">
    </script>
    
</form>
-->

</body>
</html>