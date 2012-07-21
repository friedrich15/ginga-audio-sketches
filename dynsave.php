<?php 

if (isset($_POST['text'])) { 

    $connection = @mysql_connect('localhost', 'eugen', 'eitJedEstitJapoyp') 
        or die (mysql_error()); 
    mysql_select_db('eugen_ginga', $connection) 
        or die (mysql_error()); 

    $query = "UPDATE testtable SET text = '".$_POST['text']."'"; 
    $resource = mysql_query($query) 
        or die (mysql_error());

} 

?>