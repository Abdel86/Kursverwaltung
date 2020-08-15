<?php
include('C:\xampp\htdocs\projekt\portFolio\class\validation.php');
include('C:\xampp\htdocs\projekt\portFolio\class\database.php');


$val = new Validation();
$db = new Database();

?>
<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <title>Kursverwaltung</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href=""><img src="logo.png" width="70"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="kListe.php">Kursangebote</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pListe.php">Prüfungsangebote</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Meine Anmeldungen</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container-fluid">
