<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/home.css">
</head>
<body>
	<?php
		if($this->session->userdata("logado")){
	?>

		<div class="container">
			<div class="row">
				<div class="col-8">
					<h1>Seja bem vindo(a) <?=$_SESSION['logado']['nm_usuario']?>!</h1>
				</div>
				<div class="col-4">
					<a href="<?=base_url('sair')?>" class="btn btn-warning btn-block">Sair</a>
				</div>
			</div>
		</div>
	<?php
		}//fim do if user data
		else{
			redirect(base_url('login'));
		}
	?>
</body>
</html>
