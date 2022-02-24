<?php
session_start();
require_once 'model/connection.php';

$db = new Database();

$bookQuery = $db->query("SELECT * FROM `library`");//Вывод данных киг из БД 

foreach ($bookQuery as $one){

?>
<div class="card mb-3 me-3" style="width: 18rem;">
  <img src="<?= $one['Image']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $one['Title']; //Вывод названия книги книги ?></h5> 
    <p class="card-text"><?= $one['Description']; //Вывод описания книги ?></p>
    <hr>
    <p class="card-text">Автор: <?= $one['Author']; //Вывод автора ?></p>
  </div>
</div>
<?php } ?>







                  
