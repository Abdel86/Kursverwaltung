<?php




abstract class Veranstaltung
{
  protected $nummer;
  protected $name;
  protected $datumBeginn;
  protected $datumEnde;
  protected $teilnehmerAnzahl;
  protected $kosten;


  abstract function addVeranstaltung($nummer, $name, $datumBeginn ,$datumEnde, $teilnehmerAnzahl, $kosten);
  abstract function updateVeranstaltung($nummer);
  abstract function deleteVeranstaltung($nummer);

  }



 ?>
