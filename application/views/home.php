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
			
				<div class="row">
					<div class="col-12">
						<h3>Cadastro de endereço</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="">Digite seu Cep:</label>
							<input type="text" class="form-control" id="cep">
						</div>
					</div>
					<div class="col-4">
						<button class="btn btn-primary btn-block buscar" id="buscar">Buscar</button>
					</div>
				</div>
				<form action="">
				<div class="row">
					<div class="col-12">
						<label for="">Rua:</label>
						<input type="text" class="form-control" id="rua">
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<label for="">Numero:</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-4">
						<label for="">Bairro:</label>
						<input type="text" class="form-control" id="bairro"> 
					</div>
					<div class="col-4">
						<label for="">Cidade:</label>
						<input type="text" class="form-control" id="cidade">
					</div>
					<div class="col-2">
						<label for="">Estado:</label>
						<input type="text" class="form-control" id="estado">
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<button class="btn btn-success btn-block buscar">Salvar</button>
					</div>
					<div class="col-6">
						<button class="btn btn-danger btn-block buscar">Cancelar</button>
					</div>
				</div>
			</form>
			
		</div>
	<?php
		}//fim do if user data
		else{
			redirect(base_url('login'));
		}
	?>
	<script src="<?=base_url()?>assets/js/cep.js"></script>
</body>
</html>
