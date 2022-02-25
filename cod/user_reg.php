<?php
require_once('connections.php');
$log = $_POST['log'];
$par = $_POST['par'];
$email = $_POST['email'];
$nick = $_POST['nick'];
$resul = mysqli_query($connect, "SELECT password FROM users where login='$log'");
if ($resul)
    {
    $sum_row_users = mysqli_num_rows($resul);	
    if ($sum_row_users==0)
        {	
        $addgolos = mysqli_query($connect, "INSERT INTO `users` (`id_user`, `nickname`, `login`, `password`, `email`, `avatar`, `id_rol`) VALUES (NULL, '$nick', '$log', '$par', '$email', '1', '1')");
        $prov = mysqli_query($connect, "SELECT `login` FROM `users`");
        echo "done";   
        }
    else{

   
    }   

