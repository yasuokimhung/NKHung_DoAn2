<?php
require_once ('../../Connect/connect.php');
session_start();
$usernameRe = $_GET["usernameRe"];
$emailRe = $_GET["emailRe"];
$myPass = $_GET["myPass"];
$create_date = date('Y-m-d H:s:i');
$sql = "insert into login(User, Email, Username, Password, create_date) values ('{$usernameRe}', '{$emailRe}', '{$usernameRe}', '{$myPass}', '{$create_date}')";

$kq = mysqli_query($connect,$sql, MYSQLI_STORE_RESULT);
if($kq == 1){
        echo "success";
} else {
        echo "error";
}

?>