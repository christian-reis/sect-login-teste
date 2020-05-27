<?php
	
	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		if(strcmp($email, "12345") == 0 &&  strcmp($senha, "123") == 0) {
			//echo "<script>window.alert('Login correto')</script>";
			
			echo "<script>location.href='home.php'</script>";
			
		} else {
			//echo "<script>window.alert('Login Incorreto')</script>";
		
			echo "<script>location.href='index.php?action=2'</script>";
			
		}
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SECT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/brasao.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php if(isset($_GET['action']) && $_GET['action'] == 2) { ?>
				<div class="alert">
					<div class="card card-1 card-erro">
						<span style="margin: 20px;">Matrícula ou senha inválido</span>
					</div>		
				</div>
				<?php } ?>	
				<form class="login100-form validate-form" action="index.php" method="post">
				
					<span class="login100-form-title p-b-34">
						Acessar Conta
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="Matrícula">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  type="submit" name="login" class="login100-form-btn">
							Entrar
						</button>
					</div>

					

					<div class="w-full text-center p-t-20">
						<input type="checkbox">
						<span class="txt1">
							lembre-me
						</span>
					</div>

					<div class="w-full text-center p-t-27 p-b-100">
						<span class="txt1">
							Esqueci
						</span>

						<a href="#" class="txt2">
							Senha?
						</a>
					</div>
					<div class="w-full text-center" >
						<span class="txt1">
							Copyright © 2020 Governo do Estado do Amazonas - Todos os direitos reservados - VERSÃO 2.0.0
						</span>
					</div>
				</form>
				

				<div class="login100-more" style="background-image: url('images/logo_sect.jpeg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
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
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
