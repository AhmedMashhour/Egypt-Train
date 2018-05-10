
<?php

$db=new PDO("mysql:host=localhost",'root','');
$db->exec('create database if not exists train;') or die (print_r($dbh->errorInfo(), true));

?>