// show Detail Item List

function indexItemList(item){
  var type = "seller";
  var result = document.getElementById("bodyDetailWTS");

  xml = new XMLHttpRequest();
  xml.onreadystatechange = function() {
      if (xml.readyState == 4) {
          result.innerHTML = xml.responseText;
      }
  }
  url = `Control/placeOrder/detailWTSList.php?type=${type}&item=${item}`;
  xml.open("GET", url, "false");
  xml.send();

  var type2 = "buyer";
  var result2 = document.getElementById("bodyDetailWTB");
  xml2 = new XMLHttpRequest();
  xml2.onreadystatechange = function() {
      if (xml2.readyState == 4) {
          result2.innerHTML = xml2.responseText;
      }
  }
  url2 = `Control/placeOrder/detailWTBList.php?type=${type2}&item=${item}`;
  xml2.open("GET", url2, "false");
  xml2.send();
  
}


// ----------------------- Place Order Modal -------------------------------

//Show password for Register 

//Sticky for Fixed element

// Online STATUS
function checkSTT(sttTypes){
  var i, status , logo;

  status = document.getElementsByClassName("checkStatus");
  for (i = 0; i < status.length; i++){
    status[i].classList.remove("checkStatusChose");
  }

  logo = document.getElementsByClassName("choseCircle");
  for (i = 0; i < logo.length; i++){
    logo[i].className = logo[i].className.replace(" fa-dot-circle", " fa-circle");
  }
  // document.getElementById(sttTypes).st
  status[sttTypes].classList.add("checkStatusChose");
  logo[sttTypes].className = logo[sttTypes].className.replace( " fa-circle", " fa-dot-circle");
  
}



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

