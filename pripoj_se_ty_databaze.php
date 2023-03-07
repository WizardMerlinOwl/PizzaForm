<?php
    function DbCon()
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pizzeria2";

        $conn = mysqli_connect($server, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Něco se pokazilo :(" . $conn->connect_error);
        }
        mysqli_set_charset($conn, "utf8");

        return $conn;
    }
//    $conn->set_charset("utf8");
