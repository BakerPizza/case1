<?php
session_start();
// Выход из личного кабинета
if (isset($_POST['ExitOnClick'])) {
    if(isset($_SESSION['User'])){

       unset($_SESSION['User']);
        header("Location: ../index.php");


    }
    else{

    }
}








