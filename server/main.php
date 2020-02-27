<?php
require 'auth.php';
require './createOrder.php';
require './sendEmail.php';

$orderData = $_POST;

$userId = auth($orderData['email'], $orderData['name'], $orderData['phone'], $pdo);
$orderId = createOrder($orderData, $userId, $pdo);

sendEmail($userId, $orderId, $pdo);




