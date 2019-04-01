<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post"  >
    <div class="field">
        from
        <input type="text" id="find" name="from" value="" palceholder="" class="vl_empty" />
    </div>
    <div class="field">
        to
        <input type="text" id="find" name="to" value="" palceholder="" class="vl_empty" />
    </div>
    <div class="field">
        <input type="submit" name = "save" value="find" class="green_btn" onclick="findFunction()"/>
    </div>
</form>
<?php
        require_once 'php/Dogovor.php';
        $con = Connection::get_instance()->dbh;
        if ($_POST['from']!='' && $_POST['to']!=''){
            $from = $_POST['from'];
            $to = $_POST['to'];
            $result = $con->query("SELECT * FROM dogovor where sumd between $from and $to");
        } else {
            $result = $con->query("SELECT * FROM dogovor");
        }
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $records[] = $row;
        }
        for ($i=0; $i<count($records);$i++ ) {
            print( $records[$i]["id_d"].". ".$records[$i]["numberd"]." ".$records[$i]["sumd"]." ".$records[$i]["datastart"]." ".$records[$i]["datafinish"]." ".$records[$i]["avans"]." "."<br>");
         }
?>

</body>
</html>