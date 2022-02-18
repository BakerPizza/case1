<table class="table">
    <thead>
        <tr>
            <th scope="col">Дата</th>
            <th scope="col">Событие</th>
            <th scope="col">Описание</th>
        </tr>
    </thead>
    <tbody>
        <?php require_once 'model/connection.php';

        $db = new Database();

        $calendar = $db->query("SELECT * FROM `events`");  //выбрать всё из таблицы blog

        foreach ($calendar as $p) {
        ?>
            <tr>
                <td><?= $p['Event_date']; ?></td> 
                <td><?= $p['Event_name']; ?></td>
                <td><?= $p['Event_description']; ?></td>
            </tr>
        <?php //вывести строки таблицы: дата, название, описание /\
        }
        ?>
    </tbody>
</table>
