<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$type = $_GET["type"];
$quantity = $_GET["quantity"];
// lay so luong lon nhat
$total_title = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM {$type}"));

$limit = $total_title;
if ($quantity > $limit) $quantity = $limit;

// lay ket qua
$query = "SELECT * FROM {$type} ORDER BY `id` DESC LIMIT 0, ".$quantity;
$result = mysqli_query($connect, $query);
$white = 1;

while($row = mysqli_fetch_array($result)){
	$itemShow = '<a href="detail.php?item='.$row["ItemName"].'" class="itemAnchor bodyContentShow">';
	if ($white%2 != 0) {
		$itemShow .= '<div class="item whiteDiv">';
	} else {
		$itemShow .= '<div class="item">';
	}	
	$itemShow.=  '<div class="itemIMGDiv"><img src="IMG/'.$row["ItemName"].'.png" class="itemIMG"></div>
	   <div class="itemInfo">
		  <label class="itemLabel">'.$row["ItemName"].'</label>
		  <label class="itemLabelPrice">Prices: <label class="itemPrice">'.$row["price"].' Platinum</label></label>
		  <label class="itemLabelPrice" style="float: left; margin-right: 10px;">Status: <label class="itemPrice">Online</label></label>
		  <label class="itemLabelPrice">Quantity <label class="itemPrice">'.$row["quantity"].'</label></label>
		  <label class="itemLabelPrice">Player\'s name: <label class="itemPrice">'.$row["User"].'</label></label>
	   </div>
	</div> 
 </a>';
	$white++;
	echo $itemShow;
	
}

?>
