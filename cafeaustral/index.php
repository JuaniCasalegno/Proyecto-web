<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="fondo.css">
</head>
<body >
    
    <form method="post">
    	<h1>Reserva Café Austral</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="text" name="cantidad" placeholder="Cant.  personas">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>