
<?php
// подключение к базе данных
$db_path = 'Turnemo/turnemo.github.io/database.accdb';
$conn = new COM('ADODB.Connection');
$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=$db_path");

// выполнение запроса
$rs = $conn->Execute("SELECT * FROM table_name");

// вывод результатов
echo "<table>";
while (!$rs->EOF) {
    echo "<tr>";
    echo "<td>" . $rs->Fields['column_1']->Value . "</td>";
    echo "<td>" . $rs->Fields['column_2']->Value . "</td>";
    // добавьте столбцы, которые нужно отобразить
    echo "</tr>";
    $rs->MoveNext();
}
echo "</table>";

// закрытие соединения
$rs->Close();
$conn->Close();
?>
