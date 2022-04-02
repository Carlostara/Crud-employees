<?php
include("conexion.php");
$con=conectar();

$id_employees=$_POST['id_employees'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$identity_document=$_POST['identity_document'];
$adress=$_POST['adress'];
$telephone=$_POST['telephone'];


$sql="INSERT INTO employees VALUES('$id_employees','$name','$surname','$identity_document','$adress','$telephone')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: employees.php");
    
}else {
}
?>