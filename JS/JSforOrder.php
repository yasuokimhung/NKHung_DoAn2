<?php 
if (isset($_SESSION["user"])){
    $user = $_SESSION["user"]; 
}else {
    $user = "";
}
    
?>
<script type="text/javascript">
// place order
var placeOrderModal = document.getElementById("placeOrderModal");
function placeOrderBtn() {
    var user = "<?php echo $user; ?>";
    if (user != ""){
        placeOrderModal.style.display = "block";
    } else alert("Vui lòng đăng nhập để sử dụng tính năng này");
}

function closePlaceOrder() {
  placeOrderModal.style.display = "none";
}

function insertIMG(){   
    var itemName = document.getElementById("opItemName").value
    var img = "<img src=\"IMG/" + itemName + ".png\" height=\"150px\">";

    document.getElementById("imgPO").innerHTML = img;
    document.getElementById("labelIMG").innerHTML = itemName;

}
function is_valid_datalist_value(idDataList, inputValue) {
  var option = document.querySelector("#" + idDataList + " option[value='" + inputValue + "']");
  if (option != null) {
    return option.value.length > 0;
  }
  return false;
}
// function doValidate() {
//   if (is_valid_datalist_value('searchText', document.getElementById('searchTextCSS').value)) {
//       var searchItem = document.getElementById("searchTextCSS").value;
//       if (searchItem.value != 0){
//         window.location.href = "detail.php?item=" + searchItem ;
//       }
//   } else {
//     alert("Không tồn tại item cần tìm");
//   }
// }

function placeOrderRequest(){
    if (is_valid_datalist_value('searchText', document.getElementById('opItemName').value)) {
        var user = "<?php echo $user; ?>";
    var item = "<?php if(isset($_GET["item"])) echo $_GET["item"]; else echo 5 ?>"
    var radio = document.querySelector('input[name="poRadio"]:checked').value;
    var opPriceUnit = document.getElementById("opPriceUnit").value;
    var opQuantity = document.getElementById("opQuantity").value;
    var opItemName = document.getElementById("opItemName").value;
    
    xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(xml.readyState == 4){
                var rp = xml.responseText;
                if (rp == "success"){
                    placeOrderModal.style.display = "none";
                    alert("Thêm thành công");
                    indexItemList(item);             
                }else {
                    alert("Thêm thất bại");
                }     
            }
    }
    url = `Control/placeOrder/placeOrderPost.php?user=${user}&radio=${radio}&opPriceUnit=${opPriceUnit}
            &opQuantity=${opQuantity}&opItemName=${opItemName}`;
    xml.open("GET", url, "false");
    xml.send();
  } else {
    alert("Không tồn tại item cần tìm");
  }

    
}


// format Order Type
var seller = document.getElementById("seller");
var buyer = document.getElementById("buyer");
var bodyDetailWTS = document.getElementById("bodyDetailWTS");
var bodyDetailWTB = document.getElementById("bodyDetailWTB");


function changeTypeSell() {
  seller.classList.add("orderTypeChose");
  buyer.classList.remove("orderTypeChose");
  bodyDetailWTS.classList.remove("hide");
  bodyDetailWTB.classList.add("hide");
}

function changeTypeBuy() {
  seller.classList.remove("orderTypeChose");
  buyer.classList.add("orderTypeChose");
  bodyDetailWTS.classList.add("hide");
  bodyDetailWTB.classList.remove("hide");
}


</script>