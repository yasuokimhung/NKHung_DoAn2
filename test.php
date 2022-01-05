<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form onsubmit="return false">
        <input type="text" id="color" list="colours">
        <datalist id="colours">
            <option value="Red" data-id="1" />
            <option value="Blue" data-id="2" />
            <option value="Green" data-id="3" />
            <option value="Black" data-id="4" />
            <option value="White" data-id="5" />
        </datalist>
        <button onclick="doValidate();">Send</button>
    </form>
    <script>
    function is_valid_datalist_value(idDataList, inputValue) {
        var option = document.querySelector("#" + idDataList + " option[value='" + inputValue + "']");
        if (option != null) {
            return option.value.length > 0;
        }
        return false;
    }

    function doValidate() {
        if (is_valid_datalist_value('colours', document.getElementById('color').value)) {
            alert("Valid");
        } else {
            alert("Invalid");
        }
    }
    </script>
</body>

</html>