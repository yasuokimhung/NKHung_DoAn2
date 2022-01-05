<div id="menu">
      <nav class="navbar navbar-expand-sm navST">
         <ul class="navbar-nav navUL mr-auto">
            <li class="nav-item">
               <a class="nav-link navbar-brand activate" href="index.php"> The Knightmare</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link navbar-brand" href="#">Item's Types <i class="fas fa-sort-down"></i></a>
               <div class="dropdownMenu">
                  <a href="#">Frames</a>
                  <a href="#">Weapons</a>
                  <a href="#">Mods</a>
                  <a href="#">Upgrade</a>
                  <a href="#">Materials</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link navbar-brand" href="userinfo.php?user=<?php if (isset($_SESSION["username"])) echo $_SESSION["username"];?>">Information</a>
            </li>
         </ul>
         <ul class="navbar-nav navUL ml-auto">
            <li class="nav-item">
               <a class="nav-link navbar-brand" href="#">Game Tools</a>
            </li>
            <li class="nav-item">
               <a class="nav-link navbar-brand activate"><i class="fas fa-shopping-cart"></i> Market</a>
            </li>
         </ul>
      </nav>
   </div>