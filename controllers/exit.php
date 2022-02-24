<?php
session_start();
if (isset($_POST['ExitOnClick'])) {
    if(isset($_SESSION['User'])){

       unset($_SESSION['User']);
        header("Location: ../index.php");


    }
    else{

    }
}








