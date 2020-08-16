<?php
/**
 * [die Klasse prueft, ob die eingegebene Daten korrekt sind]
 */
class Validation
{

/**
 * [die Funktion ueberprueft, ob die Eingaben ausgefuellst sind]
 * @param  [type] $value [description]
 * @return [type]        [description]
 */
function requiredInput($value)
{
  $str = trim($value);
  if(strlen($str) > 0)
  {
    return true;
  }
  return false;
}

/**
 * [die Funktion ueberprueft, ob die Nummer 6-Stellige ist]
 * @param  [type] $nummer [description]
 * @return [type]         [description]
 */
function checkNummer($nummer)
{
  if(preg_match('/^\d{6}$/',$nummer))
  {
    return true;
  }
  return false;

}

/**
 * [die Funktion ueberprueft, ob das Enddatum nicht gosser als das Beginndatum ist]
 * @param  [type] $datumBeginn [description]
 * @param  [type] $datumEnde   [description]
 * @return [type]              [description]
 */
function checkDatum($datumBeginn, $datumEnde)
{
  if($datumEnde > $datumBeginn)
  {
    return true;
  }
  return false;
}

/**
 * [die Funktion ueberprueft, ob der Name gueltig ist]
 * @param  [type] $name [description]
 * @return [type]       [description]
 */
function checkName($name)
{
   if (preg_match("/^[a-zA-Z]+$/",$name))
   {
     return true;
   }
   return false;
}

/**
 * [die Funktion ueberprueft, ob die Anzahl zwischen 5 und 25 ist]
 * @param  [type] $anzahl [description]
 * @return [type]         [description]
 */
function checkAnzahl($anzahl)
{
  if($anzahl>4 && $anzahl<26)
  {
    return true;
  }
  return false;

}

/**
 * [die Funktion ueberprueft, ob die E-Mail Adresse gueltig ist]
 * @param  [type] $email [description]
 * @return [type]        [description]
 */
function checkEmail($email)
{
  if(preg_match('/^\S+@\S+.[A-Z]{2,4}$/i', $email))
  {
    return true;
  }
  return false;
}

/**
 * [die Funktion ueberprueft, ob das Passwort minimal aus 8 Zeichen besteht]
 * @param  [type] $password [description]
 * @return [type]           [description]
 */
function checkPassword($password)
{
  if(preg_match('/^(\w+\S?){8,}$/'))
  {
    return true;
  }
  return false;

}

}

?>
