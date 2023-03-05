<?php
include 'connect.php';
if (isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

 
    $sql = "INSERT INTO crud (name, email, number, plan,address, message) 
    VALUES ('$name','$email','$number','$plan','$address','$message')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "data stored in a database successfully";
        header('location:display.php');
    } else {

        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>register</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" action="">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label>Number</label>
                <input type="tel" class="form-control" placeholder="enter your number" name="number"  required>
            </div>
            <div class="mb-3">
            <span>choose plan</span>
            <select name="plan" class="form-control">
            <option  name="plan" value="basic">choose your planning</option>
               <option  name="plan" value="basic">basic plan</option>
               <option  name="plan" value="premium">Premium plan</option>
               <option  name="plan" value="ultimate">ultimate plan</option>
            </select>
         </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="enter your address"  required>
            </div>
            <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control" placeholder="enter your message" cols="10" rows="5"  required></textarea>
            </div>
            <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>