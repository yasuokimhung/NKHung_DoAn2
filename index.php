<?php 
session_start();

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
    <title>TKN</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>

<body>
   <!-- JS insert -->
   <script type="text/javascript" src="JS\mainJS2.js"></script>
   <!-- end JS -->
       <!-- Khai bao JS -->
        
    <div class="container-fluid">
        <!-- Header -->
        <div id="header" style="background-image: url(IMG/warframe2.jpg); height: 350px">
            <div class="row">
                <!-- Logo Web -->
                <a href="index.php" class="col-2"><img src="IMG\logo.png" height="150" style="margin-left: 40px;"></a>
                <!-- Title -->
                <div id="headTitle" class="col-sm-2">
                    <h2>The Knightmare</h2>
                </div>
                <!-- Search box -->
                <?php
                  include_once("layer/search.php");
               ?>
                <!-- Modal for btnSignIn-->
                <?php
                  include_once("layer/modalSignIn.php");
               ?>
                <!-- end for modal signin -->
            </div>
        </div>
        <!-- menu -->
        <?php 
      include_once("layer/menu.php");
   ?>
        <!-- menu -->
        <div id="bodyHeader">
            <div class="row">
                <div class="col-sm-3">
                    <h3 style="text-align: center;margin: 0;line-height: 50px">MOST RECENT ORDERS</h3>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;margin: 3px">Online status</label>
                    <div class="checkStatus checkStatusChose" onclick="checkSTT(0)">
                        <input type="radio" name="checkStatus">
                        <i class="choseCircle fas fa-dot-circle"></i>
                        <label>All</label>
                    </div>
                    <div class="checkStatus" onclick="checkSTT(1)">
                        <input type="radio" name="checkStatus">
                        <i class="choseCircle fas fa-circle"></i>
                        <label>On Site</label>
                    </div>
                    <div class="checkStatus" onclick="checkSTT(2)">
                        <input type="radio" name="checkStatus">
                        <i class="choseCircle fas fa-circle"></i>
                        <label>In Game</label>
                    </div>
                </div>
                <div class="col-sm-3 price">
                    <label>Max Price <input type="number" min="1" max="9999" placeholder="Max" name="maxPrice">
                        Platinum</label>
                    <label>Min Price <input type="number" min="1" max="9999" placeholder="0" name="minPrice">
                        Platinum</label>
                </div>
                <div class="col-sm-2 select">
                    <label>Region</label>
                    <select>
                        <option>International (EN)</option>
                        <option>Russia</option>
                        <option>Korean</option>
                        <option>France</option>
                        <option>Sweden</option>
                        <option>Germany</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="body">

            <div class="row">
                <!----------------- WTS DIV -------------->
                <div id="wtsBodyContent" class="col-sm-6">
                    <label class="wts" id="opWTS">Want to sell</label>
                    <div id="wtsBodyItemList">
                        
                    </div>

                </div>

                <!-------------------- WTB DIV ---------------------->
                <div id="wtbBodyContent" class="col-sm-6">
                    <label class="wtb" id="opWTB">Want to buy</label>
                    <div id="wtbBodyItemList">
                        
                    </div>
                </div>
            </div>

            <div id="lessAndMore" class="row">
                <div class="col-sm-6">
                    <button id="showMore" onclick="showmore()" class="btn btn-info">Show More</button>
                </div>
                <div class="col-sm-6">
                    <button id="showLess" onclick="showless()" class="btn btn-info">Show Less</button>
                </div>
            </div>
                <!-- script index List-->
                <script type="text/javascript">
                    indexItemList();
                    var quantity = 3;
                    function showmore(){
                        quantity +=3;
                        indexItemList(quantity);
                    }
                    function showless(){
                        quantity -=3;
                        indexItemList(quantity);
                    }
                </script>
                <!-- end script -->
        </div>


    <?php 
        include_once("layer/placeOrder.php");
   ?>
    <script type="text/javascript" src="JS\mainJS2.js"></script>

        <!-- Footer -->
    <?php 
         include_once("layer/foot.php");
    ?>


