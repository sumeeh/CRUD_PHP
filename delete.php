<?php
require_once "db.inc.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);
    header('Location: display.php');
}else{
    die(mysqli_error($mysqli));
}