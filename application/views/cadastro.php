<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cadastro.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Cadastro de Pessoas</h1>
			</div>
		</div>
		<form action="<?=base_url('inserir')?>" method="post">
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label for="email">E-mail:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="col-6">
						<label for="senha">Senha:</label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<button class="btn btn-success btn-block" type="submit">Cadastrar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
