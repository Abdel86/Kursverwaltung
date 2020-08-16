<?php
include('veranstaltung.php');

/**
 * [Die Klasse repraesentiert einen Kurs und erbt die Eingenschaften einer Veranstaltung]
 */





class Kurs extends Veranstaltung
{


   function addVeranstaltung($nummer, $name, $datumBeginn ,$datumEnde, $teilnehmerAnzahl, $kosten)
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
