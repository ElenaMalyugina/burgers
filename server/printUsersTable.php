<?php
require_once "connect.php";
require_once "printTable.php";

function printUsersTable() {
    global $pdo;

    $getUsersQuery = $pdo->prepare("SELECT * FROM users");
    $getUsersQuery->execute();
    $users = $getUsersQuery->fetchAll(PDO::FETCH_ASSOC); 

    printTable($users);
}

