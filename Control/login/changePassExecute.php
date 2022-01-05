<?php
require_once ('../../Connect/connect.php');
session_start();
$usernameCP = $_GET["usernameCP"];
$myPassCP = $_GET["myPassCP"];
$passwordOldChange = $_GET["passwordOldChange"];
$sql = "UPDATE `login` SET Password = '{$myPassCP}' WHERE Username = '{$usernameCP}' AND Password = '{$passwordOldChange}'";

$kq = mysqli_query($connect,$sql);
$bool = mysqli_affected_rows($connect);
if($bool > 0){
        echo "success";
} else {
        echo "error";
}
?>