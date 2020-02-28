<?php
require "connect.php";
require "printTable.php";

$getOrdersQuery = $pdo->prepare("SELECT * FROM orders");
$getOrdersQuery->execute();
$orders = $getOrdersQuery->fetchAll(PDO::FETCH_ASSOC); 
                    
printTable($orders);