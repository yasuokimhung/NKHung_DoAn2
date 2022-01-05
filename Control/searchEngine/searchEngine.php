<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$item = $_GET["item"];
// lay so luong lon nhat
// lay ket qua
$query = 'SELECT ItemName FROM item where ItemName Like "%'.$item.'%" ORDER BY ItemName';
$result = mysqli_query($connect, $query);
$id = 1;
while($row = mysqli_fetch_array($result)){
	echo  '<option value="'.$row["ItemName"].'" data-id="'.$id.'">';
	$id++;
}

?>
