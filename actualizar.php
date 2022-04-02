<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM employees WHERE id_employees='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_employees" value="<?php echo $row['id_employees']  ?>">                         
                                <input type="text" class="form-control mb-3" name="name" placeholder="name" value="<?php echo $row['name']  ?>">
                                <input type="text" class="form-control mb-3" name="surname" placeholder="surname" value="<?php echo $row['surname']  ?>">
                                <input type="text" class="form-control mb-3" name="identity_document" placeholder="identity_document" value="<?php echo $row['identity_document']  ?>">
                                <input type="text" class="form-control mb-3" name="adress" placeholder="adress" value="<?php echo $row['adress']  ?>">
                                <input type="text" class="form-control mb-3" name="telephone" placeholder="telephone" value="<?php echo $row['telephone']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>