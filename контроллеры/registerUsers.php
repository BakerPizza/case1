<?php
session_start();
require_once '../model/connection.php';

//Person register


function addUser($login,$password,$confirmPassword,$email,$name,$lastname,$patronymic){

    $errorFields = [];

    $login = strip_tags(trim($login));
    $password =  strip_tags(trim($password));
    $confirmPassword =  strip_tags(trim($confirmPassword));
    $name =  strip_tags(trim($name));
    $lastname =  strip_tags(trim($lastname));
    $patronymic = strip_tags(trim($patronymic));



// проверка на соответствие (длине, заполненности поля) поля ввода логина,
    if($login === '' || strlen($login) < 4 || strlen($login) > 12 || preg_match('/[А-Яа-яЁё_ -]/iu', $login) ){
        $errorFields[] =  'loginReg';
    }
 // проверка на соответствие (длине, заполненности поля) поля ввода Пароля
    if($password === '' || strlen($password) < 8 || strlen($password) > 16  ||  preg_match('/[А-Яа-яЁё_ -]/iu', $password)){
        $errorFields[] =  'passwordReg';
    }
// проверка на соответствие (длине, заполненности поля) поля ввода повтора пароля
    if($confirmPassword === '' || strlen($confirmPassword) < 8 || strlen($confirmPassword) > 16 || preg_match('/[А-Яа-яЁё]/iu', $confirmPassword)){
        $errorFields[] =  'confirmPassword';
    }
// проверка на соответствие (длине, заполненности поля) поля ввода почты
    if($email === '' || strlen($email) < 3 || strlen($email) > 42 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorFields[] = 'email';
    }
//проверка на соответствие (длине, заполненности поля) поля ввода имени
    if($name === '' || strlen($name) < 3 || strlen($name) > 25 ||strlen($name) < 3){
        $errorFields[] =  'name';
    }
// проверка на соответствие (длине, заполненности поля) поля ввода фамилии
    if($lastname === '' || strlen($lastname) < 3 || strlen($lastname) > 30 || strlen($lastname) < 3){
        $errorFields[] =  'lastname';
    }
 // проверка на соответствие (длине, заполненности поля) поля ввода отчества
    if($patronymic === '' || strlen($patronymic) < 3 || strlen($patronymic) > 30 || strlen($patronymic) < 3){
        $errorFields[] =  'patronymic';
    }

 // если есть ошибки(сработает условие)
    if(!empty($errorFields)){
        $response = [

            'status' => false,
            'type' => 1, //error validation
            'massage' => 'проверьте правильность полей',
            'fields' => $errorFields

        ];
        // вывод сообщения о ошибке, необходимо проверить поля
        echo json_encode($response);


        die();
    }

    $db = new Database();

    $param = [
        'login' => $login
        ];
    
    $checkLogin = $db->query("SELECT * FROM `users` WHERE `login` = :login" , $param);
// проверка логина
    if(!empty($checkLogin)){
        $response = [
            'status' => false,
            'type' => 3, //login busy
            'massage' => 'такой логин уже существет',
        ];

        echo json_encode($response);


        die();
    }
// проверка пароля
        if($password === $confirmPassword) {

            $password = md5($password);

            $param = [
                'login' => $login,
                'password' => $password,
                'email' => $email,
                'name' => $name,
                'lastname' => $lastname,
                'patronymic' => $patronymic
            ];
            // ввод данных пользователя в базу данных
            $db->execute("INSERT INTO `users` (`id`, `login`, `password` ,`email`, `name`, `lastname` , `patronymic`) VALUES (NULL, :login, :password , :email , :name , :lastname ,:patronymic)", $param);

            

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
                'type' => 2, //Password mismatch
                'massage' => 'пароли не совпадают',
                ];

            echo json_encode($response);

        }

}


addUser($_POST['login'],$_POST['password'],$_POST['confirmPassword'],$_POST['email'],$_POST['name'],$_POST['lastname'],$_POST['patronymic']);
