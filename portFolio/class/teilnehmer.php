<?php
require('person.php');
/**
 * [Diese Klasse repräsentiert einen Teilnehmer, die Klasse erbt die Eigenschaften einer Person]
 */
 class Teilnehmer extends Person
{
  /**
   * [__construct description]
   */
  public function __construct($name, $gDatum,$gender,$email,$password)
  {
    parent::__construct($name, $gDatum,$gender,$email,$password);
  }

}

 ?>
