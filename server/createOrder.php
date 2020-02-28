<?php
require './connect.php';

function createOrder($orderData, $userId) {
    global $pdo;
    
    $orderData = [
        'userId'=>$userId,
        'street'=>$orderData['street'], 
        'home'=>$orderData['home'], 
        'part'=>$orderData['part'] ? $orderData['part'] : '-', 
        'appt'=>$orderData['appt'] ? $orderData['appt'] : '-',
        'myFloor'=>$orderData['floor'] ? $orderData['floor'] : '-',
        'comment'=>$orderData['comment'] ? $orderData['comment'] : '-',
        'needTheChange'=>$orderData['needTheChange'] ? 1 : 0,
        'paymentCard'=>$orderData['paymentCard'] ? 1 : 0,
        'noCallback'=>$orderData['noCallback'] ? 1 : 0
    ];

    $createOrderQuery = $pdo->prepare('INSERT INTO orders (userId, street, home, part, appt, `floor`, comment, needTheChange, paymentCard, noCallback) VALUES (:userId, :street, :home, :part, :appt, :myFloor, :comment, :needTheChange, :paymentCard, :noCallback)');
    $createOrderQuery->execute($orderData);

    $userData = ['userId'=>$userId];
    $orderIdQuery = $pdo->prepare('SELECT id FROM orders WHERE userId = :userId ORDER BY id desc LIMIT 1');
    $orderIdQuery->execute($userData);
    $orderId = $orderIdQuery->fetch(PDO::FETCH_ASSOC);

    return $orderId['id'];
}