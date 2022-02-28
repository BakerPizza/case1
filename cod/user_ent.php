<?php 
session_start();
require_once('connections.php');
$login = $_POST['log'];
$password = $_POST['par'];


$entrance = mysqli_query($connect , "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");// проверка логина и пароля

if(mysqli_num_rows($entrance)>0){
  $user = mysqli_fetch_assoc($entrance);
  $_SESSION['nick'] = $user['nickname'];
  $_SESSION['login'] = $user['login'];
  $_SESSION['id_user'] = $user['id_user'];
  $_SESSION['users'] = [
      "id_rol" => $user['id_rol']
  ];
  if($_SESSION['users']['id_rol']==2){
    header('Location: ../admin.php');
  }
  if($_SESSION['users']['id_rol']==1){
    header('Location: ../personal.php');
  }
}
else {
$_SESSION['message']="Пароль или Логин не правельный";
header('location: ../entrance.php');
}
?>
