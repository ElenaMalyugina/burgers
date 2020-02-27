<?php
require './connect.php';

function auth($email, $name, $phone, $pdo) {

    function getUserId($email, $pdo) {
        $authData = ['email'=>$email];
        $authQuery = $pdo->prepare('SELECT id FROM users WHERE email = :email');
        $authQuery->execute($authData);

        $userId = $authQuery->fetch(PDO::FETCH_ASSOC);

        return $userId['id'];
    }

    function createUser($email, $name, $phone, $pdo) {
        $userData = ['email'=>$email, 'name1'=>$name, 'phone'=>$phone];

        $newUserQuery = $pdo->prepare('INSERT INTO users (email, name, phone) VALUES (:email, :name1, :phone)');
        $newUserQuery->execute($userData);     
    }

    $userId = getUserId($email, $pdo);    

    if(!$userId) {
        createUser($email, $name, $phone, $pdo);
        $userId = getUserId($email, $pdo); 
    }

    return $userId;
}