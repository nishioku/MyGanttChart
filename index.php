<?php

/*Connect MySQL*/
mysql_connect('localhost', 'root', 'root') or die(mysql_error());
mysql_select_db('MyGanttChart');
mysql_query('set names UTF-8');

$Sql1 = sprintf('select * from user where ID = 1');
$Set1 = mysql_query($Sql1) or die(mysql_error());
$Nishioku = mysql_fetch_assoc($Set1);

var_dump($Nishioku);

?>

<html>
    <head>
        <!--<link rel="icon" type="image/vnd.microsoft.icon" href="okuvideo.ico">-->
        <link rel="stylesheet" href="style.css">
        <title>MyGanttChart</title>
    </head>
    <div id="main">
        <div id="table">
            <table>
                <tr>
                    <th></th>
                </tr>
            </table>
        </div>
    </div>
</html>
