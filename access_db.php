<?php
$db_path = 'database.accdb';
$conn = new COM('ADODB.Connection');
$conn->Open("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=$db_path");


$rs = $conn->Execute("SELECT * FROM table_name");
while (!$rs->EOF) {
    echo $rs->Fields['column_name']->Value;
    $rs->MoveNext();
}


$rs->Close();
$conn->Close();
?>
