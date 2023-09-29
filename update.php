<?php
require_once "db.inc.php";
//to display the info saved in the database
$id=$_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$email = $row['email'];
$phone = $row['phone'];

//to update the info in the database
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];

    //password hashing
    $options = [
        'cost' => 12
    ];
    $pwdHashing = password_hash($_POST["pwd"], PASSWORD_BCRYPT);

    $sql = "UPDATE crud SET id='$id', username='$username', email='$email', phone='$phone', pwd='$pwdHashing' WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header('Location: display.php');
    }else{
        die(mysqli_error($mysqli));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form style="margin-top:50px" method="post">
        <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="name" value=<?php echo $username;?>>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone no.</label>
            <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" value=<?php echo $phone;?>>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Update your password" name="pwd">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>
            </div>
</body>
</html>