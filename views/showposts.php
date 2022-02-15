<?php require_once 'model/connection.php';

$db = new Database();

$test1= $db->query("SELECT * FROM `blog`");  //выбрать всё из таблицы blog

foreach($test1 as $p){
    echo "<h4>".$p['title_post']."</h4><br><p>".$p['description_post']."<p><br>";  //вывести title_post,description_post	
}
?>