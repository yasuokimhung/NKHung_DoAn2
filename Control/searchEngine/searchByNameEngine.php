<?php
require_once ('../../Connect/connect.php');
session_start();

$query = 'SELECT User FROM login ORDER BY User';
$result = mysqli_query($connect, $query);
$id = 1;
while($row = mysqli_fetch_array($result)){
	echo  '<option value="'.$row["User"].'" data-id="'.$id.'">';
	$id++;
}

?>
