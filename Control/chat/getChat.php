<?php
require_once ('../../Connect/connect.php');
session_start();
// phantrang
$from_urs = $_GET["from_urs"];
$to_urs = $_GET["to_urs"];
// lay so luong lon nhat
// lay ket qua
$query = "SELECT * FROM messages 
    WHERE (from_urs = '{$from_urs}' AND to_urs = '{$to_urs}')
    OR (from_urs = '{$to_urs}' AND to_urs = '{$from_urs}') ORDER BY msg_id";
$result = mysqli_query($connect, $query);
$output = "";
while($row = mysqli_fetch_array($result)){
    if ($row["from_urs"] == $from_urs){
        $output.= '<div class="rightMSG">
        <img src="IMG/logo.png" style="width: 55px;float: right;">
        '.$row["msg"].'
     </div>';
        
    } else {
        $output.= '<div class="leftMSG">
        <img src="IMG/sach.png" style="width: 65px">
         '.$row["msg"].'
     </div> ';
    }
	
}
echo $output;
?>
