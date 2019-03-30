<?php
    require_once 'connection.php';
    $con = Connection::get_instance()->dbh;
    $id = $_POST['id'];
    $result = $con->query("UPDATE firm set shef = '".$_POST['shef']."', `name` ='".$_POST['name']."', address = '".$_POST['address']."' where id_firm = $id");
