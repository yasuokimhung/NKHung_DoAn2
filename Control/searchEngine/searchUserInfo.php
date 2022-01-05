<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$user = $_GET["user"];
// lay so luong lon nhat
// lay ket qua
$query = 'SELECT DISTINCT ItemName FROM seller where User Like "'.$user.'" 
UNION SELECT DISTINCT ItemName FROM buyer where User Like "'.$user.'" 
ORDER BY ItemName';
// $query += 'SELECT DISTINCT ItemName FROM buyer where User Like "'.$user.'" ORDER BY ItemName';
$result = mysqli_query($connect, $query);
$id = 1;
while($row = mysqli_fetch_array($result)){
	echo  '<option value="'.$row["ItemName"].'" data-id="'.$id.'">';
	$id++;
}

?>
