<?php

require_once 'php/connection.php';
require_once 'php/Firm.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
//    $firm = new Firm();
//    $records = $firm->connect();
//    print_r($records);
//    $name = $records[$id]["name"];
//    $shef = $records[$id]["shef"];

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action='php/SaveFirm.php' class='contact-form' method="post">
        <div class="form-row">
            <label for="name">text</label>
            <input type="text" placeholder="name" name="name" value="<?php echo"$name";?>" id="name">
        </div>
        <div class="form-row">
            <label for="shef">shef</label>
            <input type="text" placeholder="shef" name="shef" value="<?php echo"$shef";?>" id="shef">
        </div>
        <div class="form-row">
            <label for="address">address</label>
            <input type="text" placeholder="address" name="address" value="<?php echo"$address";?>" id="address">
        </div>
        <input type="hidden" name="id" value="<?php echo"$id";?>"></p>
        <input type="submit" name = "save" value="save" class="green_btn"/>
    </form>
</body>
</html>
