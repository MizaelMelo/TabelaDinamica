<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="icon" href="table.ico" type="image/x-icon" />
	
	<title>Estudo Tabela Dinâmica</title>

	<!-- CSS Files -->
    <link href="custom/css/bootstrap.min.css" rel="stylesheet" />
    <link href="custom/css/material-kit.css" rel="stylesheet"/>
    <link href="custom/css/ProjectTable.css" rel="stylesheet"/>
</head>
<body>
	<div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
	<div class="side-menu-wrapper">
	<a href="#" class="menu-close" style="z-index: -1;">&times;</a>
		<ul>
			<li><a href="#" target="_blank" rel="nofollow">Botão 1</a></li>
			<li><a href="#" target="_blank" rel="nofollow">Botão 2</a></li>
			<li><a href="#" target="_blank" rel="nofollow">Botão 3</a></li>
			<li><a href="#" target="_blank" rel="nofollow">Botão 4</a></li>

		</ul>
	</div>
		<!-- Carregamento dos arquivos .php -->
		<?php
			$this->loadViewInTemplate($viewName, $viewData);
		?>
	<!--   Arquivos JS   -->
	<script src="custom/js/jquery.min.js" type="text/javascript"></script>
	<script src="custom/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="custom/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script src="custom/js/ProjectTable.js" type="text/javascript"></script>
</body>		
</html>
