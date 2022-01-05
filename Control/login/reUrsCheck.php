<?php 
    require_once('../../Connect/connect.php');
    $tenTaiKhoan = $_GET["tenTaiKhoan"];
    $sql = "Select * from login where Username = '{$tenTaiKhoan}'";
    $kq = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($kq);
    if (empty($tenTaiKhoan)){
        echo "<b class=\"alert\">Username can't not empty</b>";
    }else if (mysqli_num_rows($kq) > 0){
        echo "<b class=\"alert\">{$tenTaiKhoan} already available</b>";
    } else echo "";

?>