<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Site PW3</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/reset.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/principal.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="jumbotron cont">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">Último ano de ETEC! (PHP usando framework)</p>
				<hr class="my-4">
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Config</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Logout</a>
					</li> 
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<h3>Título</h3>
				<img src="<?php echo base_url()?>/assets/imagens/teste.jpg" alt="" class="img-fluid">
				<p>lalalalalalalalal</p>
			</div>
		
			<div class="col-4">
				<h3>Título</h3>
				<img src="<?php echo base_url()?>/assets/imagens/teste.jpg" alt="" class="img-fluid">
				<p>lalalalalalalalal</p>
			</div>
		</div>
	</div>
</body>
</html>

