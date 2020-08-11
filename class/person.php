<?php
/**
 * [Diese abstrakte Klasse repräsentiert ein Person]
 * @var [type]
 */

 abstract class Person
{
  private $name;
  private $gDatum;
  private $gender;
  private $email;
  private $password;


  public function __construct($name, $gDatum,$gender,$email,$password)
  {
    $this->name = $name;
    $this->gDatum = $gDatum;
    $this->gender = $gender;
    $this->email = $email;
    $this->password = $password;



  }


}
 ?>
