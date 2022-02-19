<?php
session_start();
require_once('connections.php');
$title = $_POST['title'];
$text = $_POST['text'];
$id_user = $_SESSION['id_user'];
$img_type = substr($_FILES['img']['type'],0,5);
if(!empty($_FILES['img']['tmp_name']) and $img_type=='image'){     
    $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $post = mysqli_query($connect, "INSERT INTO `post` (`id_post`, `id_user`, `title`, `text`, `img`, `time`) VALUES (NULL, '$id_user', '$title', '$text', '$img', NULL)");
    header('Location: ../index.php');
    echo "done";
}
else{
    $_SESSION['message']="Картинка не загружена";
    header('Location: ../index.php');
    echo "errorpost";
}
 ?>