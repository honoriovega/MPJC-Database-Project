<?php
function getDatabaseConnection() {
    $dbHost = "localhost";
    $dbName = "MPJC";
    $username = "root";
    $password = "";
        
    $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
    return $dbConn;
}


//Process SQL statements
function getDataBySQL($sql) {
    global $conn;
    $statment = $conn -> prepare($sql);
    $statment -> execute();
    $records = $statment -> fetchALL (PDO::FETCH_ASSOC);
    return $records;
}
?>
