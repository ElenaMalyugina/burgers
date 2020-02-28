<?php
require 'auth.php';
require './createOrder.php';
require './sendEmail.php';

$orderData = $_POST;

$userId = auth($orderData['email'], $orderData['name'], $orderData['phone']);
$orderId = createOrder($orderData, $userId);

sendEmail($userId, $orderId);




