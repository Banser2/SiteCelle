<?php 
mysql_connect("localhost", "root");
mysql_select_db("site_celle");
$result = mysql_query("SELECT * FROM `usuarios`");
    $row = mysql_fetch_assoc($result);
?>