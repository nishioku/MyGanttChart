<?php

$link = mysql_connect('localhost', 'root', 'root') or die(mysql_error());
$db_list = mysql_list_dbs($link);

$i = 0;
$cnt = mysql_num_rows($db_list);
while ($i < $cnt) {
    echo mysql_db_name($db_list, $i) . "\n";
    $i++;
}

?>