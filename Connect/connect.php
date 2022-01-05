<?php 
    define("HOST", "localhost");
    define("DATABASE", "doan2");
    define("USERNAME", "root");
    define("PASSWORD", "");

    $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    if(mysqli_connect_errno()!==0){
        die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
    }

mysqli_set_charset($connect,'utf8');    
?>