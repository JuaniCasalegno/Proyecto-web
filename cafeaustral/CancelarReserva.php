<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="fondo.css">
</head>
<body >
    <form style="margin-top: 70px; padding-top: 28px; margin-bottom: 180px;" method="post">
    	<h1>Cancelar Reserva Café Austral</h1>
        <input type="text" name="id" placeholder="id de la reserva">
    	<input type="submit" name="cancelar">
    </form>
        <?php
        include("php/Cancelar.php");
        ?>
</body>
</html>