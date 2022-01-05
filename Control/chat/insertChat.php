<?php
require_once ('../../Connect/connect.php');
session_start();
$from_urs = $_GET["from_urs"];
$to_urs = $_GET["to_urs"];
$message = $_GET["message"];

$sql = "insert into messages(from_urs, to_urs, msg) values ('{$from_urs}', '{$to_urs}', '{$message}')";

$kq = mysqli_query($connect,$sql, MYSQLI_STORE_RESULT);
if($kq == 1){
        echo "success";
} else {
        echo "error";
}

?>