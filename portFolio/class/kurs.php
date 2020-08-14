<?php
include('veranstaltung.php');
include('database.php');
$db = new Database();






class Kurs extends Veranstaltung
{


   function addVeranstaltung($nummer, $datumBeginn ,$datumEnde, $teilnehmerAnzahl)
  {
    $sql = "INSERT INTO kurs (kursNummer, kursBeginn, kursEnde, teilnehmerAnzahl)
    values('$nummer', '$datumBeginn', '$datumEnde', '$teilnehmerAnzahl')";
    $result = $db->insert($sql);
  }

  function updateVeranstaltung($nummer)
  {


  }

  function deleteVeranstaltung($nummer)
  {
    $sql = "delete From kurs where kursnummer = $nummer";
    mysqli_query($con,$sql);
  }

}
 ?>
