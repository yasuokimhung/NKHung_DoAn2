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
   <link rel="stylesheet" type="text/css" href="CSS\infoCSS.css">

   <!-- add icon vao title icon -->
   <link rel="icon" href="IMG\logo.png" type="image/icon type">

   <!-- javascrip bootstap -->
   <!--    <script type="text/javascript" href="Bootstrap\js\bootstrap.min.js"></script> -->
   <!-- Jquery -->
   <link rel="stylesheet" type="text/css" href="JS\jquery.js">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
   <title>UserInfo</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>

<body>

   <!-- Khai bao JS -->
   <?php 
      include("JS/JSforUserInfo.php");
   ?>
    
   <!-- menu -->
   <div class="container-fluid">
      <!-- Header -->
      <div id="header" style="background-image: url(IMG/warframe1.jpg); height: 320px; background-position: bottom;">
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
         <!-- Modal for btnSignIn-->
         <div class="modal" id="signInModal">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <p class="login">Sign in</p> <span id="btnRegister" class="register"><p>Register</p></span>
                  </div>
                  <div id="modalLogin" class="modal-body">
                     <input class="loginText" type="text" name="" placeholder="User name">
                     <input id="loginPass" class="loginText" type="password" name="" placeholder="Password">
                     <div class="showPassDIV">
                        <input type="checkbox" onclick="showPass()" name="" >
                        <label>Show password</label>                        
                     </div>
                     <input type="submit" class="dangNhap" name="" value="Sign in">
                     <button  class="dangNhap closeModal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>

         <!-- Modal for btnSignIn-->
         <div class="modal" id="registerModal">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <span id="btnBack2SignIn" class="login">Sign in</span> <p class="register">Register</p>
                  </div>
                  <div id="modalLogin" class="modal-body">
                     <input class="loginText" type="text" name="" placeholder="User name">
                     <input class="loginText" type="text" name="" placeholder="Your email">
                     <input class="loginText" type="password" id="myPass" name="" placeholder="Password">
                     <input class="loginText" type="password" id="myPassAgain" name="" placeholder="Confirm password">
                     <div class="showPassDIV">
                        <input type="checkbox" onclick="showPass()" name="" >
                        <label>Show password</label>                        
                     </div>
                        <input type="submit" class="dangNhap" name="" value="Register">
                        <button class="dangNhap closeModal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- EndRow -->

      <div id="headItem">
         <img src="IMG/sach.png" class="headItemImg">
         <label class="headItemName"><?php 
         if(isset($_GET["user"])) echo $_GET["user"];
         else if (isset($_SESSION["username"])) echo $_SESSION["username"];
         ?></label>
         <?php
         $starRate = '
         <div class="stars">
         <form action="">
            <input class="star star-5" id="star-5" type="radio" name="star"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" id="star-4" type="radio" name="star"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" id="star-3" type="radio" name="star"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" id="star-2" type="radio" name="star"/>
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" id="star-1" type="radio" name="star"/>
            <label class="star star-1" for="star-1"></label>
         </form>
      </div>
         ';
         if(isset($_SESSION["username"])){
            if(isset($_GET["user"])){
               if($_GET["user"] != $_SESSION["username"]){
                  echo $starRate;
               } 
               // else echo "Wellcome to The KnightMare ".$_SESSION["username"];
            } 
            // else echo "Wellcome to The KnightMare ".$_SESSION["username"];
         }      
         ?>
         <label class="headInfo bonusTitle1">753 Platinum/LISTED SALES</label>
        <label class="headInfo bonusTitle2">253 Platinum/LISTED BUYS</label>
        <label class="headInfo bonusTitle3"> +0/REPUTATION</label>
      </div>
         
      </div>

   </div>
         <!-- menu -->
   <?php 
      include_once("layer/menu.php");
   ?>

   <div id="bodyHeader">
   		<div class="row">
   			<div class="col-sm-3 Order">
               <label style="display: block;margin: 3px">Detail</label>
               <div id="offer" class="orderType">
                  <input type="radio" name="" checked="">
                  Offer
               </div>
               <div id="chatter" class="orderType orderTypeChose">
                  <input type="radio" name="" >
                  Personal chat
               </div>

   			</div>
            <!-- search by name -->
   			<div class="col-sm-6">
               <?php include("layer/searchByName.php") ?>

   			</div>
   			<div class="col-sm-3 price">
   				<label>Max Price <input type="number" min="1" max="9999" placeholder="Max" name="maxPrice"> Platinum</label>
   				<label>Min Price <input type="number" min="1" max="9999" placeholder="0" name="minPrice"> Platinum</label>
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
                  <span onclick="change1(0)">Unit Price  <i id="sortStt" class="sort fas fa-caret-up"></i></span>
               </div>
               <div class="col-sm-2">
                  <span onclick="change2(1)">Quantity  <i id="sortUP" class="sort fas fa-caret-down"></i></span>
               </div>
            </div>
         </div>
         <!-- =================================================================================================================== -->
         <div id="bodyDetailWTS" >
            <label class="wts" id="opWTS">Want to sell</label>
            <div id="phpUserWTS">
               <!-- all code List here -->
            </div>         
         </div>
         <!-- ============================================================================================================================ -->
         <div id="bodyDetailWTB" >
            <label class="wtb" id="opWTB">Want to buy</label>
            <div id="phpUserWTB">
               <!-- all code List here -->
            </div>
         </div>
      </div>
      <!-- script de tao dung item List -->
      <script type="text/javascript">   
         var bool = "false";
         var user = "<?php 
            if(isset($_GET["user"])){
               echo $_GET["user"];
            }else if(isset($_SESSION["username"])){
               echo $_SESSION["username"];             
            } 
         ?>";
         var bool = "<?php 
            if(isset($_GET["user"]) && isset($_SESSION["username"])) {
               if($_GET["user"] == $_SESSION["username"]) echo "true";
               else echo "false";
            }else if(isset($_SESSION["username"])){
               echo "true";
            }else echo "fasle"; ?>";  
            // chay code de tai thong tin buyer va seller cho nguoi dung
         userItemList(user, bool);
         // alert(123);      

         function doSearchUSItem() {
            var searchItem = document.getElementById("searchItem").value;
            if (searchItem == ""){
               userItemList(user, bool);
            } else {
               if (checkUserAndData('searchItemList', document.getElementById('searchItem').value)) {
                  userItemList(user, bool, searchItem);
               } else alert("Hiện tại bạn chưa giao dịch vật phẩm này");
            } 
         }
         
      </script>
       <!-- personal chat -->
      <?php 
         include("layer/popChat.php");
      ?>

      <!-- Footer -->
      <div id="footer">
         
         <label>Contact to me: Nguyen Kim Hung</label>
         <label><i class="fas fa-envelope"></i>  nkhung.20it10@vku.udn.vn</label>
         <label><i class="fas fa-phone"></i>  0564055156</label>
         <label style="margin: 0 -100px;"><a href="https://www.facebook.com/yatachi.knightmare/"><i class="fab fa-facebook-square"></i></a></label>
      </div>
   </div>


</div>

<!-- Khai bao JS -->
<?php 
    include_once("JS/chatJS.php");
?>
<script type="text/javascript" src="JS\mainJS3.js"></script>
<script type="text/javascript">
   searchBYNameSuggestList();
   searchSuggestList();
   searchUSItemList();
</script>
</body>

</html>