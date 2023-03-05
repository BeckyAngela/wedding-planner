<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
</head>

<body>
    <div  class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add user</a>

        </button>
<<<<<<< HEAD
    
=======
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">logout</a>

        </button>
>>>>>>> 5ce3570 (second commit)
        <table class="table">
            <thead>
                <tr>
                    <th class="text-light">ID</th>
                    <th class="text-light">Name</th>
                    <th class="text-light">Email</th>
                    <th class="text-light">Number</th>
                    <th class="text-light">Plan</th>
                    <th class="text-light">Address</th>
                    <th class="text-light">Message</th>
                    <th class="text-light">operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $number = $row['number'];
                        $plan = $row['plan'];
                        $address = $row['address'];
                        $message = $row['message'];
                        echo '<tr>
    <th class="text-light">' . $id . '</th>
    <td class="text-light">' . $name . '</td>
    <td class="text-light">' . $email . '</td>
    <td class="text-light">' . $number . '</td>
    <td class="text-light">' . $plan . '</td>
    <td class="text-light">' . $address . '</td>
    <td class="text-light">' . $message . '</td>
    <td>
    <button class="btn btn-primary"><a href="update.php?updateid= '.$id.'" class="text-light">update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid= '.$id.'" class="text-light">delete</a></button>
</td>
  </tr>';
                    }
                }
                ?>
               

            </tbody>
        </table>
    </div>
</body>

</html>