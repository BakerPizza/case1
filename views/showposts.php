<?php require_once 'model/connection.php';

$db = new Database();

$array= $db->query("SELECT * FROM `blog`");  //выбрать все записи из таблицы blog

foreach($array as $row){
    echo "<h4>".$row['title_post']."</h4><br><p>".$row['description_post']."<p><br>";  //вывести title_post,description_post	
}
?>
