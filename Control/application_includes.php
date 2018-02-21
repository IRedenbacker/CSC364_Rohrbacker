<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/../includes/config.php');
    function connectToDb()
    {
        $host = "localhost";
        $dbUser = "364user";
        $dbPass = "password";
        $database = "csc_364";
        $db = new mysqli($host, $dbUser, $dbPass, $database) or die("Connect failed: %s\n". $db -> error);
        return $db;
    }
    function closeDb($db)
 {
 $db -> close();
 }
//$requestType = $_SERVER[ 'REQUEST_METHOD' ];
//session_start();
