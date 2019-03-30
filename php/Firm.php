<?php

require_once 'connection.php';

	class Firm {
        static public $con;

        function __construct(){
            self::$con = Connection::get_instance()->dbh;
        }

        public function connect(){
            $result = self::$con->query("SELECT * FROM firm");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                $records[] = $row;
            }
            return ($records);
        }
    }
 ?>