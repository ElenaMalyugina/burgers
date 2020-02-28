<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/vendors.min.css">
    <link rel="stylesheet" href="../css/main.min.css">
    <title>Панель управления</title>
</head>
<body>
    <div class="wrapper">
        <div class="maincontent">
            <div class="container">
                <h1>Панель управления</h1>
                <h2>Список заказов</h2>
                <?php
                    require './server/printOrdersTable.php';
                ?>                  
                <h2>Список пользователей</h2>       
                <?php
                    require './server/printUsersTable.php';
                ?>   
            </div>    
        </div>    
    </div>                
</body>
</html>