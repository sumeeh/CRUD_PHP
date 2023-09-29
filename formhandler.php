<?php
require_once "db.inc.php";

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

    $sql = "INSERT INTO crud (username, email, phone, pwd) VALUES ('$username', '$email', '$phone','$pwdHashing')";
    $result = mysqli_query($mysqli, $sql);
    if($result){
        header('Location: display.php');
    }else{
        die(mysqli_error($mysqli));
    }
}