<?php 

include("con_db.php");

if (isset($_POST['cancelar'])) {
    if (strlen($_POST['id']) >= 1 ){
    	$id = trim($_POST['id']);
	    $cantidad = 'cancelada';

	    $consulta = "UPDATE `reservas` SET `cantidad`='$cantidad' WHERE id = '$id'";
	    $resultado = mysqli_query($conex,$consulta);
	    
	   if ($consulta){ 
   		?> 
   		<h3 class ="ok"> ¡Reserva cancelada correctamente! </h3> 
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