<?php
require_once "connect.php";
require_once "printTable.php";

function printOrdersTable() {
    global $pdo;
    $getOrdersQuery = $pdo->prepare("SELECT * FROM orders");
    $getOrdersQuery->execute();
    $orders = $getOrdersQuery->fetchAll(PDO::FETCH_ASSOC); 
                        
    printTable($orders);
}