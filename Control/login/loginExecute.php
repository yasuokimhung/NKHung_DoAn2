<?php
require_once ('../../Connect/connect.php');
session_start();
ob_start();
$username = $_GET["username"];
$password = $_GET["password"];
$sl = "select * from login where Username = '{$username}' and Password = '{$password}'";
$kq = mysqli_query($connect,$sl);

$row = mysqli_fetch_array($kq);
if(mysqli_num_rows($kq)>0)
{ 
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['user'] = $row['User'];
	if (isset($row['imgAVT'])) {
		$_SESSION['imgAVT'] = $row['imgAVT'];
	} else{
		$_SESSION['imgAVT'] = "IMG/logo.png";
	}
	//neu admin thi vao trang admin khong thi vao trang views
		// if($username === "admin"){		
		// 	echo "admin";
		// }else {
			echo 'success';
		//}

}
else
{
	// echo '<button onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-button" 
	// class="nav-link"><i class="bi bi-person-circle"></i></button>';
	echo "error";
}
?>