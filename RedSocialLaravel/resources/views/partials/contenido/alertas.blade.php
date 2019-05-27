<?php
error_reporting(0);
$usuariolog=Auth::user()->id_Usuario;
$host_db = "localhost";
$user_db = "root";
$pass_db = "retogrupo2";
$db_name = "redsocial";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion){

	$querymensajes=mysqli_query($conexion, "SELECT count(id_Mensaje) as num_mensajes FROM mensajes  WHERE id_Destinatario = $usuariolog");
	if (mysqli_num_rows($querymensajes)){

		//echo "<p>Tienes mensajes sin leer</p>";
		while($row = mysqli_fetch_array($querymensajes, MYSQLI_ASSOC)) {
		 	$num_mensajes=$row['num_mensajes'];
        }
    }

    $querypeticiones=mysqli_query($conexion, "SELECT count(id_Usuario_Amigo) as num_peticiones FROM amigos WHERE id_usuario_destinatario=$usuariolog AND estado=0");
    if(mysqli_num_rows($querypeticiones)){
    	while($row = mysqli_fetch_array($querypeticiones, MYSQLI_ASSOC)) {
		 	$num_peticiones=$row['num_peticiones'];
        }
    }
}?>


<div class="card " style="max-width: 250px; min-width:100px;position:absolute;left:-3em; margin-top:30px;">
	<div class="col-md-4">

	<div ><!--MENSAJES-->

		<button class="btn" type="button" data-toggle="collapse" data-target="#mensajes-content" aria-expanded="false" aria-controls="mensajes-content">
			<a href={{ url('mensajes')}} style="text-decoration:none; color:#000;"><p style="font-size:14px;">Mensajes &nbsp;<span class="badge badge-primary"><?php echo $num_mensajes ?></span></p></a>
		</button>

	</div>

	<div style="margin-top:20px;"><!--PETICIONES-->

		<button class="btn" type="button" data-toggle="collapse" data-target="#peticiones-content" aria-expanded="false" aria-controls="peticiones-content">
			<a href={{ url('peticiones')}} style="text-decoration:none; color:#000;"><p style="font-size:14px;">Peticiones &nbsp;<span class="badge badge-primary"><?php echo $num_peticiones ?></span></p></a>
		</button>

	</div>
	</div>

</div>


