

// format Order Type
var offer = document.getElementById("offer");
var chatter = document.getElementById("chatter");
var bodyDetail = document.getElementById("bodyDetail");
var personalChat = document.getElementById("personalChat");


offer.onclick = function () {
  offer.classList.add("orderTypeChose");
  chatter.classList.remove("orderTypeChose");

  bodyDetail.classList.remove("hide");
  personalChat.classList.add("hide");
}

chatter.onclick = function () {
  offer.classList.remove("orderTypeChose");
  chatter.classList.add("orderTypeChose");

  bodyDetail.classList.add("hide");
  personalChat.classList.remove("hide");
}




// -------------------------- Register/Sign in Modal----------------------
// Get the modal
var modalSignIn = document.getElementById("signInModal");
var modalRegister = document.getElementById("registerModal");

// Get the button that opens the modal
var btnSignIn = document.getElementById("btnSignIn");
var btnRegister = document.getElementById("btnRegister");
var btnBack2SignIn = document.getElementById("btnBack2SignIn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeModal")[0];
var span1 = document.getElementsByClassName("closeModal")[1];

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


// When the user clicks the button, open the modal 
btnSignIn.onclick = function() {
  modalSignIn.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modalSignIn.style.display = "none";
}
span1.onclick = function() {
  modalRegister.style.display = "none";
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
function showPass() {
  // login password
    var x = document.getElementById("loginPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  // register password
  var x = document.getElementById("myPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var x = document.getElementById("myPassAgain");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
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
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }


// change the caret up or down
function change1(sort){
  var sortStt = document.getElementById("sortStt");
  var sortBy = document.getElementsByClassName("sort");

  if (sortStt.classList.contains("fa-caret-up")) {
    sortBy[sort].className = sortBy[sort].className.replace(" fa-caret-up"," fa-caret-down");
  }else{
    sortBy[sort].className = sortBy[sort].className.replace(" fa-caret-down"," fa-caret-up");
  }
  
}
function change2(sort){
  var sortUP = document.getElementById("sortUP");
  var sortBy = document.getElementsByClassName("sort");

  if (sortUP.classList.contains("fa-caret-up")) {
    sortBy[sort].className = sortBy[sort].className.replace(" fa-caret-up"," fa-caret-down");
  }else{
    sortBy[sort].className = sortBy[sort].className.replace(" fa-caret-down"," fa-caret-up");
  }
  
}


// // TEXT AREA
// var observe;
// if (window.attachEvent) {
//     observe = function (element, event, handler) {
//         element.attachEvent('on'+event, handler);
//     };
// }
// else {
//     observe = function (element, event, handler) {
//         element.addEventListener(event, handler, false);
//     };
// }
// function init () {
//     var text = document.getElementById('text');
//     function resize () {
//         text.style.height = 'auto';
//         text.style.height = text.scrollHeight+'px';
//     }
//     /* 0-timeout to get the already changed text */
//     function delayedResize () {
//         window.setTimeout(resize, 0);
//     }
//     observe(text, 'change',  resize);
//     observe(text, 'cut',     delayedResize);
//     observe(text, 'paste',   delayedResize);
//     observe(text, 'drop',    delayedResize);
//     observe(text, 'keydown', delayedResize);

//     text.focus();
//     text.select();
//     resize();
// }


// function popChat(){
//   var chatArea = document.getElementById("chatArea").value;

//   var x = '<div class="rightMSG">' + 
//   '<img src="IMG/logo.png" style="width: 55px;float: right;">' +
//   chatArea +
//   '</div>'
//   var chatBox = document.getElementById("chatBox")
//   chatBox.insertAdjacentHTML("beforeend", x);
//   document.getElementById("chatArea").value = "";

//   setTimeout(function(){
//     switch(chatArea){
//       case "hello":{
//         var x = '<div class="leftMSG">' + 
//           '<img src="IMG/sach.png" style="width: 65px;float: left;">' +
//               "hello" +
//           '</div>'
//         document.getElementById("chatBox").insertAdjacentHTML("beforeend", x);
//         chatBox.scrollTop = chatBox.scrollHeight;
//         break;
//       }
//       case "how are you":{
//         var x = '<div class="leftMSG">' + 
//           '<img src="IMG/sach.png" style="width: 65px;float: left;">' +
//               "I'm good" +
//           '</div>'
//         document.getElementById("chatBox").insertAdjacentHTML("beforeend", x);
//         chatBox.scrollTop = chatBox.scrollHeight;
//         break;
//       }
//       case "are you ghost":{
//         var x = '<div class="leftMSG">' + 
//           '<img src="IMG/sach.png" style="width: 65px;float: left;">' +
//               "no i am robot! peep poop" +
//           '</div>'
//         document.getElementById("chatBox").insertAdjacentHTML("beforeend", x);
//         chatBox.scrollTop = chatBox.scrollHeight;
//         break;
//       }
//     }
//   },1500);
//   chatBox.scrollTop = chatBox.scrollHeight;
// }