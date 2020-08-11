<?php
include('veranstaltung.php');



 class Pruefung extends Veranstaltung
{


  function addVeranstaltung($nummer, $datumBeginn ,$datumEnde, $teilnehmerAnzahl)
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
