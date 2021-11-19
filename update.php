<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$telefono=$_POST['NumerodeTelefono'];
$direccion=$_POST['Direccion'];
$numempleado=$_POST['NumerodeEmpleado'];

$sql="UPDATE empleado SET  Apellido='$apellido',NumerodeTelefono='$telefono',Direccion='$direccion' WHERE Nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>