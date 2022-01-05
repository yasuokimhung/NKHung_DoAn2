<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$user = $_GET["user"];
$bool = $_GET["bool"];
$item = $_GET["item"];
// lay so luong lon nhat
// lay ket qua
$query = "SELECT * FROM seller where (User = '{$user}') and ItemName like '%".$item."%' ORDER BY `create_date` DESC";
$result = mysqli_query($connect, $query);
$white = 1;

while($row = mysqli_fetch_array($result)){
	if ($white%2 != 0) {
		$itemShow = '<div class="item">';
	} else {
		$itemShow = '<div class="item whiteDiv">';
	}	
	$itemShow .=  '
	<div class="row">
	   <div class="col-4" style="overflow: hidden;">
		  <!-- <label class="wts deg90">WTS</label> -->
		  <img src="IMG/'.$row["ItemName"].'.png" class="itemLogo">
		  <label class="itemName">'.$row["ItemName"].'</label>
	   </div>
	   <div class="col-6">
		  <label><label class="itemStatus">Price:</label> '.$row["price"].' <label class="itemStatus" style="color: red">Ps</label></label>
		  <label><label class="itemStatus" style="margin-left: 10px;">Quantity:</label><label class="itemStatus" style="color: red">'.$row["quantity"].'</label></label>
	   </div>
	   
	   <label class="col-2">';
       if($bool == "true"){
            $itemShow .= '<form class="deleteItem" method="get" onclick="deleteList('.$row["id"].', \'seller\');return false;">
                <i class="fas fa-trash-alt"></i>
                <input id="deletedUser" hidden type="text" value="'.$row["id"].'">
            </form>';
       }
    $itemShow .= '<input type="button" class="fas itemBtn" name="" value="&#xf155;  SELL">
	   </label>
	</div>
 </div>  ';
	$white++;
	echo $itemShow;
}

?>
