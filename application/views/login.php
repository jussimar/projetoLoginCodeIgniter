<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-4 col-4">
				<div class="jumbotron form-login">
					<h1 class="display-4">Login</h1>
					<hr class="my-4">
						<form action="">
						<div class="form-group">
							<div class="row">
								<label for="email">E-mail:</label>
								<input type="email" id="email" class="form-control" placeholder="digite aqui seu e-mail ...">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label for="senha">Senha:</label>
								<input type="password" id="senha" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<button class="btn btn-success btn-block" type="submit">Entrar</button>
							</div>
						</div>
						</form>
						<hr class="my-4">
						<div class="form-group">
							<div class="row">
								<a href="<?=base_url()?>cadastro" class="btn btn-primary btn-block">Realizar Cadastro </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
