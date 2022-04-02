<?php

include("conexion.php");
$con= conectar();


$id=$_POST['id_employees'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$identify_document=$_POST['identity_document'];
$adress=$_POST['adress'];
$telephone=$_POST['telephone'];

$sql="UPDATE employees SET name='$name', surname='$surname', identity_document='$identify_document', adress='$adress',telephone='$telephone' WHERE id_employees='$id' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: employees.php");
    }
?>