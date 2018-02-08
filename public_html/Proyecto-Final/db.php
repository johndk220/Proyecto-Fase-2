<?php
$dbHostname = 'localhost';
$dbDatabase = 'adolfo_trapote';
$dbUsername = 'adolfo.trapote';
$dbPassword = '8797';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}
?>