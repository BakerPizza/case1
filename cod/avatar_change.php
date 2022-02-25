<?php
session_start();
require_once('connections.php');
$id_user = $_SESSION['id_user'];
if(isset($_POST['change'])){      
$img_type = substr($_FILES['avatar_upload_change']['type'],0,5);
if(!empty($_FILES['avatar_upload_change']['tmp_name']) and $img_type=='image'){
    $img = addslashes(file_get_contents($_FILES['avatar_upload_change']['tmp_name']));
    $post = mysqli_query($connect, "UPDATE `users` SET `avatar` = '$img' WHERE `id_user` = '$id_user'");
    header('Location: ../personal.php');
    echo "done";
}
else{
    $_SESSION['message']="Картинка не загружена";
    header('Location: ../personal.php');
    echo "errorpost";
}
}
else{
    header('Location: ../personal.php');
    echo "errorpost";
}
 ?>
