<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Directorio Estratégico</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="fondo" background="css/images/NiveldeGob.jpg">

	<div class="container">
		<h1>Nivel de Gobierno</h1>
	</div>
	<form class="ligas">
		<a class="button" href="<?= base_url().'principal'?>" title="Nivel Federal">Federal</a>	
		<a class="button" href="<?= base_url().'principalEstatal'?>" title="Nivel Estatal">Estatal</a>
		<a class="button" title="Nivel Municipal">Municipal</a>
	</form>
	<div class="container">
		<h1>Sector Privado</h1>
	</div>
	<form class="ligas">
		<a class="button" title="Nivel Municipal">Empresas</a>
	</form>
</body>
</html>
