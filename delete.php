<?php

include("Conexion.php");
$con=conectar();

$id_employees = $_GET['id'];

$sql = "DELETE  FROM employees WHERE id_employees ='$id_employees'";

$query = mysqli_query($con,$sql);

if($query){

    Header("location: employees.php");

    
}




?>