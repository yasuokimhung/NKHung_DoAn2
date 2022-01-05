<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <!-- Khai bao bootstrap -->
   <link rel="stylesheet" type="text/css" href="Bootstrap\css\bootstrap.min.css">
   <!-- Khai bao duong dan icon -->
   <link rel="stylesheet" type="text/css"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Khai bao Css -->
   <link rel="stylesheet" type="text/css" href="CSS\mainCSS.css">

   <!-- add icon vao title icon -->
   <link rel="icon" href="IMG\logo.png" type="image/icon type">

   <!-- javascrip bootstap -->
   <!--    <script type="text/javascript" href="Bootstrap\js\bootstrap.min.js"></script> -->
   <!-- Jquery -->
   <link rel="stylesheet" type="text/css" href="JS\jquery.js">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail</title>
</head>

<body>
   
   <div class="container-fluid">
      <!-- Header -->
      <div id="header" style="background-image: url(IMG/warframe3.jpg); height: 500px; background-position: bottom;">
         <div class="row">
            <!-- Logo Web -->
            <a href="index.php" class="col-2"><img src="IMG\logo.png" height="150" style="margin-left: 40px;"></a>
            <!-- Title -->
            <div id="headTitle" class="col-sm-2">
               <h2>The Knightmare</h2>
            </div>
            <!-- Search box -->
            <div class="col-sm-5">
               <form class="searchBox" action="javascript:openSearch()">
                  <input id="searchText" type="search" name=""><!--
               --><button type="submit" id="searchSubmit"><i class="fas fa-search"></i> Search</button>
            </form>
         </div>
         <div class="col-sm-2 ml-auto pad">
            <button id="btnSignIn"><i class="fas fa-sign-in-alt"></i> Sign in</button>
         </div>
         <!-- Modal for btnSignIn-->
               <?php
                  include_once("layer/modalSignIn.php");
               ?>
         <!-- end for modal signin -->
      </div>
      <!-- EndRow -->