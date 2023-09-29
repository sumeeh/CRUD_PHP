<?php
require_once "db.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" style="text-decoration:none" >Add user</a></button>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM crud";
            $result = mysqli_query($mysqli, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    echo '<tr>
                    <th scope="row">'. $id .'</th>
                    <td>'.$username.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration:none">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration:none">Delete</a></button>
                    </td>
                    </tr>';
                }
            }else{
                die(mysqli_error($mysqli));
            }
            ?>

            </tbody>
            </table>
    </div>
</body>
</html>