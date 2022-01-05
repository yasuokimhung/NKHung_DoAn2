<?php
require_once ('../../Connect/connect.php');
session_start();
ob_start();
$id = $_GET["id"];
$type = $_GET["type"];
$sl = "DELETE from {$type} where id = '{$id}'";
$kq = mysqli_query($connect,$sl, MYSQLI_STORE_RESULT);
if($kq == 1){
    echo "success";
} else {
    echo "error";
}
?>