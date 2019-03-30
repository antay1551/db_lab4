<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once 'php/connection.php';
    $con = Connection::get_instance()->dbh;
    $result = $con->query("select *from  dogovor left join firm on dogovor.id_firm=firm.id_firm where dogovor.id_firm=$id");
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $records[] = $row;
    }
    for ($i=0; $i<count($records);$i++ ) {
        print( $records[$i]["id_d"].". ".$records[$i]["numberd"]." ".$records[$i]["named"]." ". $records[$i]["sumd"] ." ". $records[$i]["datastart"] ." ". $records[$i]["datafinish"] ." ". $records[$i]["avans"]."<br>");
    }
}
?>
</body>
</html>