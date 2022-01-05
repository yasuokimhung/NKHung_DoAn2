<?php 
if (isset($_SESSION["user"])){
    $user = $_SESSION["user"]; 
}else {
    $user = "";
}

?>

<script type="text/javascript">
// bool de check xem co phai user hay ko
function userItemList(user, bool, item) {
    if (item == null) var item = "";
    var result = document.getElementById("phpUserWTS");
    xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (xml.readyState == 4) {
            result.innerHTML = xml.responseText;
        }
    }
    url = `Control/userInfo/userListWTS.php?user=${user}&bool=${bool}&item=${item}`;
    xml.open("GET", url, "false");
    xml.send();

    var result2 = document.getElementById("phpUserWTB");
    xml2 = new XMLHttpRequest();
    xml2.onreadystatechange = function() {
        if (xml2.readyState == 4) {
            result2.innerHTML = xml2.responseText;
        }
    }
    url2 = `Control/userInfo/userListWTB.php?user=${user}&bool=${bool}&item=${item}`;
    xml2.open("GET", url2, "false");
    xml2.send();
}

function deleteList(id, type) {
    var reload = "<?php echo $user;?>";
    xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (xml.readyState == 4) {
            var rp = xml.responseText;
            if (rp == "success") {
                alert("Xóa thành công");
                userItemList(reload, 'true');
            } else {
                alert("Xóa thất bại");
            }
        }
    }
    url = `Control/userInfo/deleteUserList.php?type=${type}&id=${id}`;
    xml.open("GET", url, "false");
    xml.send();

}
</script>