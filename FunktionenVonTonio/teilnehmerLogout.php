<?php
require_once 'mysql.php';
$db = new DB();
session_start();


unset($_SESSION['nachname']);
$db->sessionLoeschen();
header('Location: home.php');
exit();
?>