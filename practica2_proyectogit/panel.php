<?php
$usuario = $_POST['v_user'];
$password = $_POST['v_password'];

echo "<div class='panel_superior'>";
if($usuario =='heydi' && $password =='admin') {
	echo "Bienvenida Heydi";
	echo "<a href='index.html'>  Salir</a>";
}
else {
	echo "Usuario incorrecto";
	header('locatio:index.html');
}
echo "</div>";
?>
<!DOCTYPE>	
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/style-panel-admin.css">
	</head>
	<body>
			<header>
				<hgroup></hgroup>
			</header>
			
			<section>
			</section>
	</body>
</html>