<?php
$conn = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("webphim") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
?>