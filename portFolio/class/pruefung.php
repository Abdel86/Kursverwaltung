<?php
include('veranstaltung.php');
/**
 * [die Klasse repraesentiert eine Pruefung und erbt die Eigenschaften einer Veranstaltung]
 */


 class Pruefung extends Veranstaltung
{


  function addVeranstaltung($nummer, $name, $datumBeginn ,$datumEnde, $teilnehmerAnzahl, $kosten)
 {
   $sql = "INSERT INTO pruefung (pruefungNummer, pruefungBeginn, pruefungEnde, teilnehmerAnzahl)
   values('$nummer', '$datumBeginn', '$datumEnde', '$teilnehmerAnzahl')";
   $result = $db->insert($sql);
 }

 function updateVeranstaltung($nummer)
 {

 }
 function deleteVeranstaltung($nummer)
 {
   $sql = "delete From pruefung where pruefungnummer = $nummer";
   mysqli_query($con,$sql);

 }


}
 ?>
