<?php 

// archivo : alta.php 
// fecha : 11-08-2014 

$conexion=mysqli_connect("localhost","root","xokolatito","turismo"); 
// Check connection 
if (mysqli_connect_errno()) { 
echo "Error no me pude conectar con MySQL: " . mysqli_connect_error(); 
} 

// Se reciben los datos del formulario, $nombre es una variable de PHP, 
// $_POST['nombre'] es la variable que viene del formulario 
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']); 
$apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']); 
$edad = mysqli_real_escape_string($conexion, $_POST['edad']);  
$pais = mysqli_real_escape_string($conexion, $_POST['pais']); 
$dias = mysqli_real_escape_string($conexion, $_POST['dias']); 
$adultos = mysqli_real_escape_string($conexion, $_POST['adultos']); 
$ninios = mysqli_real_escape_string($conexion, $_POST['ninios']); 
$email = mysqli_real_escape_string($conexion, $_POST['email']); 
$twitter = mysqli_real_escape_string($conexion, $_POST['twitter']); 
$motivo = mysqli_real_escape_string($conexion, $_POST['motivo']); 
$difusion = mysqli_real_escape_string($conexion, $_POST['difusion']); 
$actividades = mysqli_real_escape_string($conexion, $_POST['actividades']); 
$comentarios = mysqli_real_escape_string($conexion, $_POST['comentarios']); 



// Query para insertar los datos a la base de datos 
$sql="INSERT INTO contactos (nombre, apellidos, edad, pais, dias, adultos, ninios, email, twitter, motivo, difusion, actividades, comentarios) 
VALUES ('$nombre', '$apellidos', '$edad', '$pais', '$dias', '$adultos', '$ninios', '$email', '$twitter', '$motivo', '$difusion', '$actividades', '$comentarios')"; 

// se graban los datos, si hay error y no se pudo, aparecera en la pantalla 
if (!mysqli_query($conexion,$sql)) { 
die('Error: no se pudieron guardar los registros ' . mysqli_error($conexion)); 
} 
echo "Registros grabados satisfactoriamente...."; 

mysqli_close($conexion); 
?> 
