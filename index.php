<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>laba</title>
</head>
<body>
    <?php
        require_once 'php/Firm.php';
        require_once 'php/DeleteFirm.php';
        $firm = new Firm();
        $records = $firm->connect();
        for ($i=0; $i<count($records);$i++ ) {
            $firstLeter = mb_substr($records[$i]["name"],0,1);
            $allLeter = mb_substr($records[$i]["name"], 1, strlen($records[$i]["name"])-1);
            print( $records[$i]["id_firm"].". ".'<a href="showfirm.php?id=' . $records[$i]["id_firm"] . '">'.  $firstLeter .'</a>'.$allLeter." ".$records[$i]["shef"]." ".$records[$i]["address"]." ".'<a href="php/DeleteFirm.php?id=' . $records[$i]["id_firm"] . '">delete</a>'." ".'<a href="ChangeFirm.php?id=' . $records[$i]["id_firm"] . '">change</a>'."<br>");
        }
    ?>
    <hr>
    <a href="create.html">create new firm</a>
    <hr>
    <a href="alldogovor.php">all dogovor</a>
</body>
</html>