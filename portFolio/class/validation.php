<?php

class Validation
{


function requiredInput($value)
{
  $str = trim($value);
  if(strlen($str) > 0)
  {
    return true;
  }
  return false;
}

function checkNummer($nummer)
{
  if(preg_match('/^d{4}$/', $nummer))
  {
    return true;
  }
  return false;

}

function checkDatum($datumBeginn, $datumEnde)
{
  if($datumEnde > $datumBeginn)
  {
    return true;
  }
  return false;
}

function checkAnzahl($anzahl)
{
  if(preg_match('/^d{5,25}$/',$anzahl))
  {
    return true;
  }
  return false;

}

function checkEmail($email)
{

}

function checkPassword($password)
{

}

}

?>
