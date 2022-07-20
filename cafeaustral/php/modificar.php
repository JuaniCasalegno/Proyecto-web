<?php 

include("con_db.php");

if (isset($_POST['modificar'])) {
    if (strlen($_POST['id']) >= 1 &&
    strlen($_POST['nombre']) >= 1 &&
     strlen($_POST['email']) >= 1 &&
      strlen($_POST['cantidad']) >= 1 &&
  		strlen($_POST['telefono']) >= 1){
    	$id = trim($_POST['id']);
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['telefono']);
	    $cantidad = trim($_POST['cantidad']);
	    $fecha = date("d/m/y");

	    $consulta = "UPDATE `reservas` SET `nombre`='$nombre',`email`='$email',`telefono`='$telefono',`cantidad`='$cantidad',`fecha`='$fecha' WHERE id = '$id'";
	    $resultado = mysqli_query($conex,$consulta);
	    
	   if ($consulta){ 
   		?> 
   		<h3 class ="ok"> ¡Reserva modificada correctamente! </h3> 
   		<?php
		}	else   { 
			?>
   		<h3 class ="bad"> Ups, hubo un error... </h3> 
   			<?php
			}

    }   else   {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    		}
}

?>