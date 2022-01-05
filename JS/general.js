// -------------------------- Register/Sign in Modal----------------------
// Get the modal
var modalSignIn = document.getElementById("signInModal");
var modalRegister = document.getElementById("registerModal");
var modelChangePass =  document.getElementById("passwordchangeModal");
// Get the button that opens the modal

var btnRegister = document.getElementById("btnRegister");
var btnBack2SignIn = document.getElementById("btnBack2SignIn");
var btnPasswordChange = document.getElementById("btnPasswordChange");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeModal")[0];
var span1 = document.getElementsByClassName("closeModal")[1];
var span2 = document.getElementsByClassName("closeModal")[2];
//When open registerModal close signInModal
btnRegister.onclick = function() {
  modalSignIn.style.display = "none";
  modalRegister.style.display = "block";
}
//When open signInModal close registerModal
btnBack2SignIn.onclick = function() {
  modalSignIn.style.display = "block";
  modalRegister.style.display = "none";
}
btnPasswordChange.onclick = function(){
  modalSignIn.style.display = "none";
  modelChangePass.style.display = "block";
}

// When the user clicks the button, open the modal 
function openSignIn() {
  modalSignIn.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modalSignIn.style.display = "none";
}
span1.onclick = function() {
  modalRegister.style.display = "none";
}
span2.onclick = function() {
  modelChangePass.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalSignIn) {
    modalSignIn.style.display = "none";
  }
  if (event.target == modalRegister) {
    modalRegister.style.display = "none";
  }
  if (event.target == placeOrderModal) {
    placeOrderModal.style.display = "none";
  }

}

//Show password for Register 
function showPass1() {
    // login password
      var x = document.getElementById("loginPass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
   
  }
  function showPass2(){
     // register password
      var x = document.getElementById("myPass");
      if (x.type === "password") {
          x.type = "text";
      } else {
          x.type = "password";
      }
      var x2 = document.getElementById("myPassAgain");
      if (x2.type === "password") {
          x2.type = "text";
      } else {
          x2.type = "password";
      }
  }
  function showPass3(){
    // register password
     var xCP = document.getElementById("myPassCP");
     if (xCP.type === "password") {
         xCP.type = "text";
     } else {
         xCP.type = "password";
     }
     var x2CP = document.getElementById("myPassAgainCP");
     if (x2CP.type === "password") {
         x2CP.type = "text";
     } else {
         x2CP.type = "password";
     }
     var x3CP = document.getElementById("passwordOldChange");
     if (x3CP.type === "password") {
         x3CP.type = "text";
     } else {
         x3CP.type = "password";
     }
 }

  //Sticky for Fixed element
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("menu");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function insertIMG(){   
  var itemName = document.getElementById("opItemName").value
  var img = "<img src=\"IMG/" + itemName + ".png\" height=\"150px\">";

  document.getElementById("imgPO").insertAdjacentHTML('afterbegin', img);
  document.getElementById("labelIMG").innerHTML = itemName;

}

// format Order Type
var seller = document.getElementById("poRadioSell");
var buyer = document.getElementById("poRadioBuy");
var oderType1 = document.getElementsByClassName("orderType1");

seller.onclick = function () {
  oderType1[0].className = oderType1[0].className.replace( " ", " orderTypeChose");
  oderType1[1].className = oderType1[1].className.replace( " orderTypeChose", " ");
  document.getElementById("radioSell").checked = true;
}

buyer.onclick = function () {
  oderType1[0].className = oderType1[0].className.replace( " orderTypeChose", " ");
  oderType1[1].className = oderType1[1].className.replace( " ", " orderTypeChose");
  document.getElementById("radioBuy").checked = true;
}

