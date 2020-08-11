<?php
include('database.php');
$db = new Database();




abstract class Veranstaltung
{
  protected $nummer;
  protected $datumBeginn;
  protected $datumEnde;
  protected $teilnehmerAnzahl;

  abstract function addVeranstaltung($nummer, $datumBeginn ,$datumEnde, $teilnehmerAnzahl);
  abstract function updateVeranstaltung($nummer);
  abstract function deleteVeranstaltung($nummer);






  }



 ?>
