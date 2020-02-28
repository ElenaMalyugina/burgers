<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Панель управления</h1>
    <h2>Список заказов</h2>
    <?php
        require "./server/connect.php";
        require "./server/printTable.php";
        $getOrdersQuery = $pdo->prepare("SELECT * FROM orders");
        $getOrdersQuery->execute();
        $orders = $getOrdersQuery->fetchAll(PDO::FETCH_ASSOC); 
        
        printTable($orders);
    ?>  
    
    <h2>Список пользователей</h2>       
    <?php
        $getUsersQuery = $pdo->prepare("SELECT * FROM users");
        $getUsersQuery->execute();
        $users = $getUsersQuery->fetchAll(PDO::FETCH_ASSOC); 

        printTable($users);
    ?>           
</body>
</html>