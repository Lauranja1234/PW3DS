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
	<div class="container-fluid">
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
			<div class="col-3">
				<h3>Idade Antiga</h3>
				<img src="<?php echo base_url()?>/assets/imagens/1.jpg" alt="" class="img-fluid"> <br></br>
				<p>Idade Antiga ou Antiguidade, na periodização das épocas históricas da humanidade, é o período que se estende desde a invenção da escrita (de 4 000 a.C. a 3 500 a.C.) até a queda do Império Romano do Ocidente (476 d.C.). Entre as principais civilizações desse período estão: Egito Antigo, Mesopotâmia, Grécia Antiga e Roma Antiga.</p>
			</div>
		
			<div class="col-3">
				<h3>Idade Média</h3>
				<img src="<?php echo base_url()?>/assets/imagens/2.jpg" alt="" class="img-fluid"> <br></br>
				<p>O que chamamos de Idade Média é o período compreendido entre a deposição do último soberano do Império Romano do Ocidente, Rômulo Augústulo (476, século V), até a conquista da cidade de Constantinopla, pelos turcos (1453, século XV), pondo fim ao Império Bizantino. Esse período costuma ser dividido em dois: Alta e Baixa Idade Média.</p>
			</div>

			<div class="col-3">
				<h3>Idade Moderna</h3>
				<img src="<?php echo base_url()?>/assets/imagens/3.jpg" alt="" class="img-fluid"> <br></br>
				<p>A Idade Moderna foi um período específico da História do Ocidente que se inicia no final da Idade Média em 1453 d.C. O acontecimento conhecido como “Queda de Constantinopla”, ocorrido em 29 de maio de 1453, é tão importante para a história mundial que foi eleito por historiadores do século XIX como aquele que encerrava o período histórico da Idade Média e, por conseguinte, dava início à Idade Moderna.</p>
			</div>

			<div class="col-3">
				<h3>Idade Contemporânea</h3>
				<img src="<?php echo base_url()?>/assets/imagens/4.jpg" alt="" class="img-fluid"> <br></br>
				<p>A Revolução Francesa, que ocorreu no ano de 1789, é o evento que, segundo alguns autores, inaugura a chamada Idade Contemporânea. Os historiadores do século XIX, que fizeram a linha divisória da História, imputaram a este acontecimento o caráter de marco divisor entre a Idade Moderna e a Contemporânea, por conta da radicalização política que o caracterizou.</p> <br></br>
			</div>
		</div>
		<div class="row">
			<div class="col-12 rodape">
				<p>História (do grego antigo ἱστορία, transl.: historía, que significa "pesquisa", "conhecimento advindo da investigação")[1] é a ciência que estuda o ser humano e sua ação no tempo e no espaço concomitantemente à análise de processos e eventos ocorridos no passado. O termo "História" também pode significar toda a informação do passado arquivada em todas as línguas por todo o mundo, por intermédio de registos históricos.</p>
			</div>
		</div>
	</div>
</body>
</html>

