<?php

$i = 0;

/*Connect MySQL*/
$link = mysql_connect( 'localhost', 'root', 'root' );
mysql_select_db( 'MyGanttChart' );
mysql_query( 'set names UTF-8' );

echo "complete1";

/*Fetch information ID=1*/
$Sql1 = sprintf( 'select * from user where ID = 1' );
$Set1 = mysql_query( $Sql1 ) or die(mysql_error());
$Nishioku = mysql_fetch_assoc( $Set1 );
$num = mysql_num_fields( $Nishioku ) ;

echo "complete1";

/*Pull DBname*/
$DBList = mysql_list_dbs( $link );
$DBName = mysql_db_name( $DBList, 1 );
$cnt = mysql_num_rows( $DBList );

echo "complete1";

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
                    <th colspan="2"><p><?php echo $DBName; ?></p></th>
                </tr>

                <?php while ( $i <= $num ){ ?>
                <tr>
                    <td><p><?php print_r( $Nishioku[$i]); ?></p></td>
                    <td><p><?php print_r( $Nishioku["$Nishioku[$i]"]); ?></p></td>
                </tr>
                <?php $i++; } ?>

            </table>
        </div>
    </div>
</html>
