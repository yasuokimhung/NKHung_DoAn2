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
    <title>Detail</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>

<body>
    <!-- khai bao JS -->
<script type="text/javascript" src="JS\mainJS.js"></script>

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
                <?php
                  include_once("layer/search.php");
               ?>

                <!-- Modal for btnSignIn-->
                <?php
                  include_once("layer/modalSignIn.php");
               ?>
                <!-- end for modal signin -->
            </div>
            <!-- EndRow -->


            <div id="headItem">
                <div class="headItemImgBoder"><img src="IMG/<?php if(isset($_GET["item"])) echo $_GET["item"];  ?>.png" class="headItemImg"></div>
                <label class="headItemName"><?php if(isset($_GET["item"])) echo $_GET["item"];  ?></label>
            </div>
        </div>

        <!-- menu -->
        <?php 
            include_once("layer/menu.php");
        ?>
        <!-- menu -->
        <div id="bodyHeader">
            <div class="row">
                <div class="col-sm-3 Order">
                    <label style="display: block;margin: 3px">Order Type</label>
                    <div id="seller" class="orderType orderTypeChose" onclick="changeTypeSell();">
                        <input type="radio" name="">
                        Seller
                    </div>
                    <div id="buyer" class="orderType" onclick="changeTypeBuy();">
                        <input type="radio" name="">
                        Buyer
                    </div>

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
        <div id="bodyDetail">
            <div id="bodyDetailHead">
                <div class="row">
                    <div class="col-sm-5">
                        <h3 class="sortBy">Sort By</h3>
                    </div>
                    <div class="col-sm-3">
                        <span onclick="change1(0)">Online Status <i id="sortStt"
                                class="sort fas fa-caret-up"></i></span>
                    </div>
                    <div class="col-sm-2">
                        <span onclick="change2(1)">Unit Price <i id="sortUP" class="sort fas fa-caret-down"></i></span>
                    </div>
                </div>
            </div>
            <!-- =================================================== bodyDetailWTS ================================================================ -->

            <div id="bodyDetailWTS">

            </div>
           
            <!-- ============================================================================================================================ -->
            <div id="bodyDetailWTB" class="hide">

            </div>
        </div>
            <script type="text/javascript">   
                var item = "<?php if(isset($_GET["item"])) echo $_GET["item"]; ?>";
                // alert(item);
                indexItemList(item);
                            
            </script>
<?php 
   include_once("layer/placeOrder.php");
?>

        <!-- Footer -->
        <?php 
   include_once("layer/foot.php");

?>
