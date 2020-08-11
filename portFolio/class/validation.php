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
}

?>
