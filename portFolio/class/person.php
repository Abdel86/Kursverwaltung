<?php
/**
 * [Diese abstrakte Klasse repräsentiert ein Person]
 * @var [type]
 */

 abstract class Person
{
  protected $name;
  protected $gDatum;
  protected $gender;
  protected $email;
  protected $password;


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
