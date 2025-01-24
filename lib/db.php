<?php 
 $serverName = "127.0.0.1,1433";
 $connectionOptions = [
 "Database" => "master", 
 "Uid" => "sa",          
 "PWD" => "StrongPassword123!" 
];

$pdo = new PDO("sqlsrv:Server=$serverName", $connectionOptions['Uid'], $connectionOptions['PWD']);
    