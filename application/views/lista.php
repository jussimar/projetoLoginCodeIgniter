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
				<div class="col-12">
					<h2>Lista de endereços</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
				<table class="table">
		<tr>
			<th>ID</th>
			<th>Rua</th>
			<th>Numero</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Estado</th>
			
		</tr>
		<?php
			foreach($data as $endereco){
		?>
				<tr>
					<td> <?= $endereco->cd_endereco ?> </td>
					<td> <?= $endereco->ds_rua ?> </td>
					<td> <?= $endereco->nr_local ?> </td>
					<td> <?= $endereco->ds_bairro ?> </td>
					<td> <?= $endereco->ds_cidade ?> </td>
					<td> <?= $endereco->ds_estado ?> </td>
				</tr>
		<?php		
			}
		?>
	</table>
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
