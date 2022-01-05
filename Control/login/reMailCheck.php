<?php 
    require_once('../../Connect/connect.php');
    $email = $_GET["email"];
    $sql = "Select * from login where Email = '{$email}'";
    $kq = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($kq);
    if (empty($email)){
        echo "<b class=\"alert\">Email can't not empty</b>";
    }else if (mysqli_num_rows($kq) > 0){
        echo "<b class=\"alert\">{$email} already available</b>";
    } else echo "";

?>