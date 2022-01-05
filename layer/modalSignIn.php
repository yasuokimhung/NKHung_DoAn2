
<div class="col-sm-2 ml-auto pad" id="loginIconForm">
    <?php 
      if ( empty($_SESSION['username'])  && empty( $_SESSION['password']) ){
         echo '<button id="btnSignIn" onclick="openSignIn();"><i class="fas fa-sign-in-alt"></i> Sign in</button>';
      }else{
         echo '<a href="Control/login/logOutExecute.php" id="sectionUser"><button class="btnLogOut"><i class="fas fa-sign-out-alt"></i> '.$_SESSION["user"].'</button></a>';
      }
    ?>
</div>
<script type="text/javascript" src="JS/loginRegister.js"></script>
    <div class="modal" id="signInModal">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <p class="login">Sign in</p> <span id="btnRegister" class="register"><p>Register</p></span>
                  </div>
                  <form id="modalLogin" class="modal-body"  action="" method="post" onsubmit="login();return false;">
                     <input id="loginUsername" class="loginText" type="text" name="" placeholder="User name" required>
                     <input id="loginPass" class="loginText" type="password" name="" placeholder="Password" required>
                     <div class="showPassDIV">
                        <input type="checkbox" onclick="showPass1()" name="" >
                        <label>Show password</label> <br> <br>
                        <label style="color: blue; cursor:pointer;" id="btnPasswordChange">Change Password</label>                        
                     </div>
                     <input type="submit" class="dangNhap" name="" value="Sign in">
                     <button type="button" class="dangNhap closeModal closeModalCss">Cancel</button>
                  </form>
               </div>
            </div>
            
         </div>

         <!-- Modal for Register-->
         <div class="modal" id="registerModal">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <span id="btnBack2SignIn" class="login">Sign in</span> <p class="register">Register</p>
                  </div>
                  <!--  -->
                  <form autocomplete="off" id="modalLogin" class="modal-body" action="" onsubmit="register();return false;" method="post">
                     <div id="alreadyUR"></div>
                     <input class="loginText" name="" id="usernameRe" onkeyup="checkUrnameRe();" type="text" name="" placeholder="User name" required>

                     <div id="alreadyMail"></div>
                     <input class="loginText" id="emailRe" name="" onkeyup="checkEmailRe();" type="text" name="" placeholder="Your email" required>
                     <input class="loginText" type="password" name="" id="myPass" name="" placeholder="Password" required>
                     <input class="loginText" type="password" name="" id="myPassAgain" name="" placeholder="Confirm password" required>
                     <div class="showPassDIV">
                        <input type="checkbox" onclick="showPass2()" name="" >
                        <label>Show password</label>                        
                     </div>
                        <input type="submit" class="dangNhap" name="" value="Register">
                        <button type="button" class="dangNhap closeModal closeModalCss">Cancel</button>
                  </form>
               </div>
            </div>
         </div>
         <!-- Modal for ChangePass-->
         <div class="modal" id="passwordchangeModal">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                      <span class="register" style="margin: auto; color:blue; ">Password Change</span>
                  </div>
                  <!--  -->
                  <form autocomplete="off" id="modalLogin" class="modal-body" action="" onsubmit="changePassword();return false;" method="post">
                     <div id="alreadyUR"></div>
                     <input class="loginText" name="" id="usernameCP" type="text" name="" placeholder="User name" required>

                     <div id="alreadyMail"></div>
                     <input class="loginText" id="passwordOldChange" name="" type="password" name="" placeholder="Old Password" required>
                     <input class="loginText" type="password" name="" id="myPassCP" name="" placeholder="New Password" required>
                     <input class="loginText" type="password" name="" id="myPassAgainCP" name="" placeholder="Confirm password" required>
                     <div class="showPassDIV">
                        <input type="checkbox" onclick="showPass3()" name="" >
                        <label>Show password</label>                        
                     </div>
                        <input type="submit" class="dangNhap" name="" value="Change Password">
                        <button type="button" class="dangNhap closeModal closeModalCss">Cancel</button>
                  </form>
               </div>
            </div>
         </div>