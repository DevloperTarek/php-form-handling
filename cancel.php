
<?php
    // Server Connection
    $server = 'localhost';
    $username = "root";
    $password = "";
    $database = "registrationdb";

    try{
        $conn = new PDO("mysql:host=$server",$username,$password,$database);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
    }
?>