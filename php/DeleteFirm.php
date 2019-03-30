<?php
    require_once 'connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $con = Connection::get_instance()->dbh;
        $result = $con->query("delete FROM firm where id_firm=$id");
        print("firm was secsessfully deleted");
    }