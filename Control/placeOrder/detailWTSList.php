<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$type = $_GET["type"];
$item = $_GET["item"];

// lay ket qua
$query = "SELECT * FROM {$type} where (ItemName = '{$item}') ORDER BY `id` DESC ";
$result = mysqli_query($connect, $query);
$white = 1;

while($row = mysqli_fetch_array($result)){
	if ($white%2 != 0) {
		$itemShow = '<div class="item">';
	} else {
		$itemShow = '<div class="item whiteDiv">';
	}	
	$itemShow.=  '
	<div class="row">
		<div class="col-sm-5">
			<label class="wts deg90">WTS</label>
			<img src="IMG/logo.png" class="itemLogo">
			<a class="itemName" href="userinfo.php?user='.$row["User"].'">'.$row["User"].'</a>
		</div>
		<div class="col-sm-2">
			<label class="itemStatus">ONLINE INGAME</label>
		</div>
		<div class="col-sm-3">
			<label><label class="itemStatus">Price:</label> '.$row["price"].' <label class="itemStatus"
					style="color: red">Platinum</label></label>
			<label><label class="itemStatus" style="margin-left: 30px;">Quantity:</label><label
					class="itemStatus" style="color: red">'.$row["quantity"].'</label></label>
		</div>
		<label class="col-sm-2">
			<input type="button" class="fas itemBtn" name="" value="&#xf155;  SELL">
		</label>
	</div>
</div>';
	$white++;
	echo $itemShow;
	
}

?>
