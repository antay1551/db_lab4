<?php
    require_once 'connection.php';
    $con = Connection::get_instance()->dbh;
    $result = $con->query("insert into firm(shef,`name`,address) values('".$_POST['shef']."','".$_POST['name']."','".$_POST['address']."')");
