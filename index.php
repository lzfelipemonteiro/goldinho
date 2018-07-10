<?php

$idConv = 00;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Plataforma de Pagamento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<!--===============================================================================================-->

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="servidor.php" method="post" name="servidor" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Goldinho & Silva
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Por Favor Insira Seu Nome">
					<span class="label-input100">Nome Completo *</span>
					<input class="input100" type="text" name="nome" placeholder="Insira seu Nome">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Por Favor Insira Seu Email">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Insira seu Email">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Needed Services *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Please chooses</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>

<!--===============================================================================================-->
<!-- Dados a Serem enviados ao Banco do Brasil-->

             <input type="hidden" name="idConv" value=<?php echo $idConv ?>>
             <input type="hidden" name="refTran" value=<?php echo $refTran ?>>
             <input type="hidden" name="valor" value="<%=valor %>">
             <input type="hidden" name="qtdPontos" value="<%=qtdPontos %>">
             <input type="hidden" name="dtVenc" value="<%=dtVenc %>">
             <input type="hidden" name="tpPagamento" value="<%=tpPagamento %>">
             <input type="hidden" name="cpfCnpj" value="<%=cpfCnpj %>">
             <input type="hidden" name="indicadorPessoa" value="<%=indicadorPessoa %>">
             <input type="hidden" name="valorDesconto" value="<%=valorDesconto %>">
             <input type="hidden" name="dataLimiteDesconto" value="<%=dataLimiteDesconto %>">
             <input type="hidden" name="tpDuplicata" value="<%=tpDuplicata %>">
             <input type="hidden" name="urlRetorno" value="<%=urlRetorno %>">
             <input type="hidden" name="urlInforma" value="<%=urlInforma %>">
             
             <input type="hidden" name="endereco" value="<%=endereco %>">
             <input type="hidden" name="cidade" value="<%=cidade %>">
             <input type="hidden" name="uf" value="<%=uf %>">
             <input type="hidden" name="cep" value="<%=cep %>">
             <input type="hidden" name="msgLoja" value="<%=msgLoja %>">
r
<!--===============================================================================================-->

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>


			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
