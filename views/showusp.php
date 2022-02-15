<table class="table table-bordered border-primary">
    <?php 
    require_once 'model/connection.php';
$db = new Database();

$evaluations = $db->query("SELECT * FROM `evaluations`");  //выбрать всё из таблицы evaluations



?>
  <thead>
    <tr>
      <th scope="col">Ученик</th>
      <th scope="col">Учитель</th>
      <th scope="col">Оценка</th>
      <th scope="col">Дата</th>
    </tr>
  </thead>
  <tbody>
<?
foreach($evaluations as $marks){
    echo "<tr>
    <th scope='row'>".$marks['id_stud']."</th>
    <td>".$marks['id_teach']."</td>
    <td>".$marks['Evaluation']."</td>
    <td>".$marks['Date']."</td>
  </tr>";  //вывод строки студента, учителя, оценки, даты
}?>
  </tbody>
</table>