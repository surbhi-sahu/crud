<?php
include'connect.php';

if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];




    $sql="insert into crudt (first_name, last_name, email, mobile, city)
    values('$first_name','$last_name','$email','$mobile','$city')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       header('location:display.php');
    }
}
   



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form method="post">
      
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control"
            placeholder="enter ur firstname" name="first_name" >
        </div>
         <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control"
            placeholder="enter ur lastname" name="last_name" >
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="Email" class="form-control"
            placeholder="enter ur email" name="email" >
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control"
            placeholder="enter ur number" name="mobile" >
        </div>
        <div class="form-group">
            <label>city</label>
            <input type="text" class="form-control"
            placeholder="enter ur city" name="city" >
        </div>
   



  <button type="submit" class="btn btn-primary" name= "submit">Submit</button>
</form>
    </div>

</body>
</html>