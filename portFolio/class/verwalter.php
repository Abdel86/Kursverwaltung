<?php
<?php
require('person.php');
include('database.php');
$db = new Database();
/**
 * [Diese Klasse repräsentiert einen Verwalter, die Klasse erbt die Eigenschaften einer Person]
 */
 class Verwalter extends Person
{
  protected $verwalterID;
  protected $verwalterUsername;
  protected $verwalterEmail;
  protected $password;
  protected $kursID;
  protected $pruefungsID;
  protected $session;




  

}



 ?>
