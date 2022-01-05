<?php
require_once ('../../Connect/connect.php');
session_start();
$user = $_GET["user"];
$radio = $_GET["radio"];
$opPriceUnit = $_GET["opPriceUnit"];
$opQuantity = $_GET["opQuantity"];
$opItemName = $_GET["opItemName"];
$create_date = date('Y-m-d H:s:i');
$sql = "insert into {$radio}(User, ItemName, price, quantity, create_date) values ('{$user}', '{$opItemName}', '{$opPriceUnit}', '{$opQuantity}', '{$create_date}')";

$kq = mysqli_query($connect,$sql, MYSQLI_STORE_RESULT);
if($kq == 1){
        echo "success";
} else {
        echo "error";
}

?>