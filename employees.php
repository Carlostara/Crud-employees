
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM employees";
    $query=mysqli_query($con,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> pagina employees</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insert.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_employees" placeholder="id_employees">
                                    <input type="text" class="form-control mb-3" name="name" placeholder="name">
                                    <input type="text" class="form-control mb-3" name="surname" placeholder="surname">
                                    <input type="text" class="form-control mb-3" name="identity_document" placeholder="identity_document">
                                    <input type="text" class="form-control mb-3" name="adress" placeholder="adress">
                                    <input type="text" class="form-control mb-3" name="telephone" placeholder="telephone">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_employees</th>
                                        <th>name</th>
                                        <th>surname</th>
                                        <th>identity_document</th>
                                        <th>adress</th>
                                        <th>telephone</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['id_employees']?></td>
                                                <td><?php  echo $row['name']?></td>
                                                <td><?php  echo $row['surname']?></td>
                                                <td><?php  echo $row['identity_document']?></td>
                                                <td><?php  echo $row['adress']?></td>    
                                                <td><?php  echo $row['telephone']?></td>        
                                                <td><a href="actualizar.php?id=<?php echo $row['id_employees'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="delete.php?id=<?php echo $row['id_employees'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>