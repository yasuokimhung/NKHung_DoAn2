<?php 
  if(isset($_GET["user"])){
    $userInfo = $_GET["user"];
  } else {
    $userInfo = "";
  }
    
  if(isset($_SESSION["user"])){
    $from_urs = $_SESSION["user"];
  } else {
    $from_urs = "";
  }
?>
<script>
  //make search bar work
function searchBYNameSuggestList(){
    var resultSearchbyName = document.getElementById("searchByNameList");
    xmlSearchbyName = new XMLHttpRequest();
    xmlSearchbyName.onreadystatechange = function(){
        if(xmlSearchbyName.readyState == 4){
            var rpByName = xmlSearchbyName.responseText;
            resultSearchbyName.innerHTML = rpByName;
        }
    }
    urlSearchbyName = `Control/searchEngine/searchByNameEngine.php`;
    xmlSearchbyName.open("GET", urlSearchbyName, "false");
    xmlSearchbyName.send();
}  
function searchUSItemList(){
    var userUSItem = "";
    var userUSItem = "<?php echo $userInfo; ?>";
    
    var resultSearchUSItem = document.getElementById("searchItemList");
    
    xmlSearchUSItem = new XMLHttpRequest();
    xmlSearchUSItem.onreadystatechange = function(){
        if(xmlSearchUSItem.readyState == 4){
            var rp = xmlSearchUSItem.responseText;
            resultSearchUSItem.innerHTML = rp;

        }
    }
    urlUSItemList = `Control/searchEngine/searchUserInfo.php?user=${userUSItem}`;
    xmlSearchUSItem.open("GET", urlUSItemList, "false");
    xmlSearchUSItem.send();
}       
function searchItemSuggestList(){
  var resultSearch = document.getElementById("searchByNameList");
  xmlSearch = new XMLHttpRequest();
  xmlSearch.onreadystatechange = function(){
      if(xmlSearch.readyState == 4){
          var rp = xmlSearch.responseText;
          resultSearch.innerHTML = rp;
      }
  }
  url = `Control/searchEngine/searchByNameEngine.php`;
  xmlSearch.open("GET", url, "false");
  xmlSearch.send();
}                                
function checkUserAndData(idDataList, inputValue) {
  var option = document.querySelector("#" + idDataList + " option[value='" + inputValue + "']");
  if (option != null) {
    return option.value.length > 0;
  }
  return false;
}
function doSearchUser() {
  if (checkUserAndData('searchByNameList', document.getElementById('searchByName').value)) {
      var searchUser = document.getElementById("searchByName").value;
      if (searchUser.value != 0){
        window.location.href = "userinfo.php?user=" + searchUser ;
      }
  } else {
    alert("Không tồn tại User cần tìm");
  }
}
function insertChat(){
  var message = document.getElementById("chatArea").value;
  var from_urs = "<?php echo $from_urs; ?>";
  var to_urs = "<?php echo $userInfo; ?>";
  if (from_urs == "" || to_urs == "") return;
  xmlPSChat = new XMLHttpRequest();
  xmlPSChat.onreadystatechange = function(){
      if(xmlPSChat.readyState == 4){
              var rpPSC = xmlPSChat.responseText;
              if (rpPSC != "success"){
                  alert("Thêm thất bại");
              } else {
                document.getElementById("chatArea").value = "";
                resultCG.scrollTop = resultCG.scrollHeight;
              }     
          }
  }
  urlPSC = `Control/chat/insertChat.php?from_urs=${from_urs}&to_urs=${to_urs}&message=${message}`;
  xmlPSChat.open("GET", urlPSC, "false");
  xmlPSChat.send();
}
setInterval(() =>{
  var from_urs2 = "<?php echo $from_urs; ?>";
  var to_urs2 = "<?php echo $userInfo; ?>";
  var resultCG = document.getElementById("chatBoxPS"); 
  xmlGC = new XMLHttpRequest();
  xmlGC.onreadystatechange = function() {
      if (xmlGC.readyState == 4) {
         var rpGC  = xmlGC.responseText;
          resultCG.innerHTML = rpGC;
          
      }
  }
  url = `Control/chat/getChat.php?from_urs=${from_urs2}&to_urs=${to_urs2}`;
  xmlGC.open("GET", url, "false");
  xmlGC.send();
}, 3000);
</script>