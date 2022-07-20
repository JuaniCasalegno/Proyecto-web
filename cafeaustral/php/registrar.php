<?php 

include("php/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 &&
     strlen($_POST['email']) >= 1 &&
      strlen($_POST['cantidad']) >= 1 &&
  		strlen($_POST['telefono']) >=1){
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['telefono']);
	    $cantidad = trim($_POST['cantidad']);
	    $fecha = date("d/m/y");

	    $consulta = "INSERT INTO reservas(nombre, email, cantidad, telefono, fecha) VALUES ('$nombre','$email','$cantidad','$telefono','$fecha')";
	    $resultado = mysqli_query($conex,$consulta);
	   if ($consulta){ 

   		//recibo el último id
   		$ultimo_id = mysqli_insert_id($conex); 
   		?> 
   		<h3 style="margin-bottom: 15px" class ="ok"> ¡Reserva número #<?php echo $ultimo_id; ?> realizada correctamente! </h3> 
   		<?php
		}	else   { 
			?>
   		<h3 style="margin-bottom: 15px" class ="bad"> Ups, hubo un error... </h3> 
   			<?php
			}

    }   else   {
	    	?> 
	    	<h3 style="margin-bottom: 15px" class="bad">¡Por favor complete los campos!</h3>
           <?php 
    		} 
}

?>