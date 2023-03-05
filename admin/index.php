<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $name = $_POST['name'];
    $password = $_POST['password'];

    $select = " SELECT * FROM login_form WHERE name = '$name' && password = '$password' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_array($result);
          header('location:display.php');
       }
    }else{
       echo  "incorrect name or password!";
    }
 ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container my-5">

   <form method="post" action="">
      <h3>login now</h3>
      <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label>password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off" required>
            </div>
      <button type="submit" name= "submit" class="btn btn-primary">Login</button>
   </form>

</div>

</body>
</html>