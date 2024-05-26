<?php
include 'connect.php';




?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-5">
        

 
 <button type="add" class="btn btn-primary my-5"><a href="index.php" class="text-light" name= "add">ADD</a> </button>
 <table class="table">
  <thead>
    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


    <?php

    $sql="Select * from `crudt` ";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $city=$row['city'];
            
            echo '<tr>
            <th scope="row">'.$id.
        '</th>
            <td>'.$first_name.'</td>
            <td>'.$last_name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$city.'</td>

            <td>
            <a href="edit.php?id=' . $id . '" class="btn btn-primary">Edit</a>
            <a href="delete.php?id=' . $id . '" class="btn btn-danger">Delete</a>
        </td>

        </tr>';
        }
    }
    
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
 </button>


    </div>


  </body>
</html>
