<?php
session_start();
require_once '../model/connection.php';


function entranceUser($login,$password){

    $password = md5($password);

    $db = new Database();

    $param = [
        'login' => $login,
        'password' => $password,
    ];

    $checkUser= $db->query("SELECT * FROM `users` WHERE `login` = :login AND `password` = :password", $param);
// проверка логина и пароля для входа для входв
    if(!empty($checkUser)){



        $_SESSION['User'] = [
            'login' => $login
        ];




        $response = [
            'status' => true,
        ];


        echo json_encode($response);


    }
    else {
        $response = [
            'status' => false,
            'type' => 4, //incorrect password or login
            'massage' => 'неверный логин или пароль'
        ];

        echo json_encode($response);

        die();

    }

}

entranceUser($_POST['login'],$_POST['password']);
