<?php
$mysqli = new mysqli("localhost","root","", "progettoweb");//connessione al DataBase
$query="select nome_utente from utente";//Query di prova
//print_r($mysqli);
$res = $mysqli->query($query);
echo $res;
?>