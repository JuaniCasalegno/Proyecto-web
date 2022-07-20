<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="fondo.css">
</head>
<body >
    
    <form style="margin-top: 25px; padding-top: 28px; margin-bottom: 20px" method="post">
    	<h1>Modificar Reserva Café Austral</h1>
        <input type="text" name="id" placeholder="id de la reserva">
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="text" name="cantidad" placeholder="Cant.  personas">
    	<input type="submit" name="modificar">
    </form>
        <?php 
        include("php/modificar.php");
        ?>

</body>
</html>
