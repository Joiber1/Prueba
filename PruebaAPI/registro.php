<?php

//llamar a la conexion de la bd

include('conexion.php');

//crear las variables del archivo registro.html que esta con el metodo post

$nombre =   $_POST['nombre'];
$Clave = $_POST['Clave'];



//crear variable conexion
$conectar = conn();

//crear variable para ingresar los datos a la bd
//La variable SQL va a almacenar los datos

$sql = "INSERT INTO pruebaapi (nombre,clave) VALUES ('$nombre','$Clave')";

//crear variable para Registrar
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='log in.html' </script>";
    }else 
    {
        echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
    }
}



// crear variable para verificar el estado de la BD

$result = mysqli_query($conectar, $sql) or trigger_error("query failed! SQL - Error:".mysqli_error($conetar), E_USER_ERROR);

echo "$sql";




?>
