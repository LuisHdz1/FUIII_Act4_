<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$telefono=$_POST['NumerodeTelefono'];
$direccion=$_POST['Direccion'];
$numempleado=$_POST['NumerodeEmpleado'];


$sql="INSERT INTO empleado(`Nombre`, `Apellido`, `NumerodeTelefono`, `Direccion`, `NumerodeEmpleado`) VALUES('$nombre','$apellido','$telefono','$direccion','$numempleado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>