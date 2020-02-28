<?php
function sendEmail($userId, $orderID) {
    global $pdo;

    $orderData = ['id'=>$orderID];
    $orderDataQuery = $pdo->prepare('SELECT street, home, part, appt, `floor` from orders WHERE id = :id');
    $orderDataQuery->execute($orderData);
    $orderData = $orderDataQuery->fetch(PDO::FETCH_ASSOC);

    $ordersCount = ['userId'=>$userId];
    $ordersCountQuery = $pdo->prepare('SELECT COUNT(*) as ordersCount FROM orders WHERE userId = :userId');
    $ordersCountQuery->execute($ordersCount);
    $ordersCountRes = $ordersCountQuery->fetch(PDO::FETCH_ASSOC);
    $ordersCount = $ordersCountRes['ordersCount'];

    $outputString = "<h1>Заказ №{$orderID}</h1>" .
                    "<p>Ваш заказ будет доставлен по адресу</p>" .
                    "<p>" . $orderData['street'] . " ". $orderData['home'] . " " . $orderData["part"] . " " . $orderData["floor"] . " " . $orderData["appt"] . "</p>" . 
                    "<p>DarkBeefBurger за 500 рублей, 1 шт</p><br>" .
                    "Спасибо, это уже {$ordersCount} заказ";

    mail('malyugina.el@yandex.ru', 'Заказ', $outputString);
}