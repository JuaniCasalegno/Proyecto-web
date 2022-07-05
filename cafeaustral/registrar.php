<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 &&
     strlen($_POST['email']) >= 1 &&
      strlen($_POST['cantidad']) >= 1 &&
  		strlen($_POST['telefono']) >=1){
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['telefono']);
	    $cantidad = trim($_POST['cantidad']);
	    $fecha_reg = date("d/m/y");
	    $consulta = "INSERT INTO reservas(nombre, email, cantidad, telefono, fecha_reg) VALUES ('$name','$email','$cantidad','$telefono','$fecha_reg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h4 class="ok">¡Reserva realizada con éxito!, pronto recibirá un email con los detalles.</h4>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>