function checkUrnameRe() {
    var tenTaiKhoan = document.getElementById("usernameRe").value;
    var already = document.getElementById("alreadyUR");
    xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(xml.readyState == 4){
            already.innerHTML = xml.responseText;   
        }
    }
    url = `Control/login/reUrsCheck.php?tenTaiKhoan=${tenTaiKhoan}`;
    xml.open("GET", url, "false");
    xml.send();
};
function checkEmailRe() {
    var email = document.getElementById("emailRe").value;
    var already = document.getElementById("alreadyMail");
    xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(xml.readyState == 4){
            already.innerHTML = xml.responseText;   
        }
    }
    url = `Control/login/reMailCheck.php?email=${email}`;
    xml.open("GET", url, "false");
    xml.send();
};
function login(){
   var username = document.getElementById("loginUsername").value;
   var password = document.getElementById("loginPass").value;
   xml = new XMLHttpRequest();
   xml.onreadystatechange = function(){
       if(xml.readyState == 4){
           var rp = xml.responseText;
           if (rp == "admin"){
               window.location.href='../admin';
           }else if (rp == "success"){
               alert("Đăng nhập thành công");
               location.reload();
           }
           else if (rp == "error"){
               alert("Đăng nhập thất bại. Vui lòng kiểm tra lại tài khoản và mật khẩu");
           }
       }
   }
   url = `Control/login/loginExecute.php?username=${username}&password=${password}`;
   xml.open("GET", url, "false");
   xml.send();
};
function register(){
    var usernameRe = document.getElementById("usernameRe").value;
    var emailRe = document.getElementById("emailRe").value;
    var myPass = document.getElementById("myPass").value;
    var myPassAgain = document.getElementById("myPassAgain").value;
    var modalRegister = document.getElementById("registerModal");
    if(myPass != myPassAgain){
        alert("Your confirm password is invalid, pls recorrect your password");
    }else{
        xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(xml.readyState == 4){
                var rp = xml.responseText;
                if (rp == "success"){
                    modalRegister.style.display = "none";
                    alert("Đăng ký thành công");
                }else {
                    alert("Đăng ký thất bại");
                }     
            }
        }
        url = `Control/login/registerExecute.php?usernameRe=${usernameRe}&emailRe=${emailRe}&myPass=${myPass}`;
        xml.open("GET", url, "false");
        xml.send();
    }
    
}
function changePassword(){
    var usernamCP= document.getElementById("usernameCP").value;
    var passwordOldChange = document.getElementById("passwordOldChange").value;
    var myPassCP = document.getElementById("myPassCP").value;
    var myPassAgainCP = document.getElementById("myPassAgainCP").value;
    var passwordchangeModal = document.getElementById("passwordchangeModal");
    if(myPassCP != myPassAgainCP){
        alert("Your confirm password is invalid, pls recorrect your password");
    }else{
        xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(xml.readyState == 4){
                var rp = xml.responseText;
                if (rp == "success"){
                    passwordchangeModal.style.display = "none";
                    alert("Đổi mật khẩu thành công");
                }else {
                    alert("Đổi mật khẩu thất bại");
                }   
            }
        }
        url = `Control/login/changePassExecute.php?usernameCP=${usernamCP}&passwordOldChange=${passwordOldChange}&myPassCP=${myPassCP}`;
        xml.open("GET", url, "false");
        xml.send();
    }
    
}
function searchSuggestList(){
    var itemSearch = "";
    var itemSearch = document.getElementById("searchTextCSS").value;
    var resultSearch = document.getElementById("searchText");

    
    xmlSearch = new XMLHttpRequest();
    xmlSearch.onreadystatechange = function(){
        if(xmlSearch.readyState == 4){
            var rp = xmlSearch.responseText;
            // alert(rp);
            resultSearch.innerHTML = rp;

        }
    }
    url = `Control/searchEngine/searchEngine.php?item=${itemSearch}`;
    xmlSearch.open("GET", url, "false");
    xmlSearch.send();
    
}     
//make search bar work
// function openSearch1(){
//     var searchItem = document.getElementById("searchTextCSS").value;
//     if (searchItem.value != 0){
//       window.location.href = searchItem + ".php";
//     }
//     alert(searchItem);
//   }                                
function is_valid_datalist_value(idDataList, inputValue) {
  var option = document.querySelector("#" + idDataList + " option[value='" + inputValue + "']");
  if (option != null) {
    return option.value.length > 0;
  }
  return false;
}
function doSearch() {
  if (is_valid_datalist_value('searchText', document.getElementById('searchTextCSS').value)) {
      var searchItem = document.getElementById("searchTextCSS").value;
      if (searchItem.value != 0){
        window.location.href = "detail.php?item=" + searchItem ;
      }
  } else {
    alert("Không tồn tại item cần tìm");
  }
}
