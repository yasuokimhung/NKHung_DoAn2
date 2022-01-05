
// -------------------------- Register/Sign in Modal----------------------

//Show password for Register 

//Sticky for Fixed element

// Online STATUS
function checkSTT(sttTypes){
  var i, status , logo;

  status = document.getElementsByClassName("checkStatus");
  for (i = 0; i < status.length; i++){
    status[i].classList.remove("checkStatusChose")
  }

  logo = document.getElementsByClassName("choseCircle");
  for (i = 0; i < logo.length; i++){
    logo[i].className = logo[i].className.replace(" fa-dot-circle", " fa-circle");
  }
  // document.getElementById(sttTypes).st
  status[sttTypes].classList.add("checkStatusChose")
  logo[sttTypes].className = logo[sttTypes].className.replace( " fa-circle", " fa-dot-circle");
  
}

//Show more and show less button
// const loadmore = document.querySelector('#showMore');
// const loadless = document.querySelector('#showLess');

// let currentItems = 2;
// let currentItems1 = 2;


// loadmore.addEventListener('click', (e) => {
//   // WTS 
//   const elementList = [...document.querySelectorAll('#wtsBodyItemList .itemAnchor')];
//   for (let i = currentItems; i < currentItems + 2; i++) {
//     if (elementList[i]) {
//       elementList[i].style.display = 'block';
//     }
//   }
//   currentItems += 2;

//   // WTB
//   const elementList1 = [...document.querySelectorAll('#wtsBodyItemList .itemAnchor')];
//     for (let i = currentItems1; i < currentItems1 + 2; i++) {
//       if (elementList1 [i]) {
//         elementList1 [i].style.display = 'block';
//       }
//     }
//   currentItems1 += 2;
// })

// loadless.addEventListener('click', (e) => {
//   // WTS 
//   const elementList = [...document.querySelectorAll('#wtbBodyItemList .itemAnchor')];
//     for (let i = currentItems; i > currentItems - 2; i--) {
//       if (elementList[i]) {
//         elementList[i].style.display = 'none';
//       }
//     }
//   currentItems -= 2;
//   // WTB
//   const elementList1  = [...document.querySelectorAll('#wtbBodyItemList .itemAnchor')];
//     for (let i = currentItems1; i > currentItems1 - 2; i--) {
//       if (elementList1 [i]) {
//         elementList1 [i].style.display = 'none';
//       }
//     }
//   currentItems1 -= 2;
// })
// ----------------------- Place Order Modal -------------------------------


function indexItemList(quantity){
  if (quantity == null || quantity < 3) quantity = 3;
  var type = "seller";
  var result = document.getElementById("wtsBodyItemList");
  xml = new XMLHttpRequest();
  xml.onreadystatechange = function() {
      if (xml.readyState == 4) {
          result.innerHTML = xml.responseText;
      }
  }
  url = `Control/placeOrder/indexItemListWTS.php?type=${type}&quantity=${quantity}`;
  xml.open("GET", url, "false");
  xml.send();

  var type2 = "buyer";
  var result2 = document.getElementById("wtbBodyItemList");
  xml2 = new XMLHttpRequest();
  xml2.onreadystatechange = function() {
      if (xml2.readyState == 4) {
          result2.innerHTML = xml2.responseText;
      }
  }
  url2 = `Control/placeOrder/indexItemListWTB.php?type=${type2}&quantity=${quantity}`;
  xml2.open("GET", url2, "false");
  xml2.send();

}
// setInterval(() =>{
//   var quantity = 300;
//   var type = "seller";
//   var result = document.getElementById("wtsBodyItemList");
//   xml = new XMLHttpRequest();
//   xml.onreadystatechange = function() {
//       if (xml.readyState == 4) {
//           result.innerHTML = xml.responseText;
//       }
//   }
//   url = `Control/placeOrder/indexItemListWTS.php?type=${type}&quantity=${quantity}`;
//   xml.open("GET", url, "false");
//   xml.send();

//   var type2 = "buyer";
//   var result2 = document.getElementById("wtbBodyItemList");
//   xml2 = new XMLHttpRequest();
//   xml2.onreadystatechange = function() {
//       if (xml2.readyState == 4) {
//           result2.innerHTML = xml2.responseText;
//       }
//   }
//   url2 = `Control/placeOrder/indexItemListWTB.php?type=${type2}&quantity=${quantity}`;
//   xml2.open("GET", url2, "false");
//   xml2.send();
// }, 500);

