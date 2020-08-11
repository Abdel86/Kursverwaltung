<?php
/**
 * [Diese Klasse stellt die Verbindung zur Datenbank und beschreibt die CRUD Funktionen]
 */
class Database
{
  private $serverName = "localhost";
  private $userName = "root";
  private $password = "";
  private $dbName = "kursverwaltung";
  private $con;
/**
 * [__construct description]
 */
  public function __construct()
  {
    $this->con = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
    if($this->con->connect_errno)
    {
      die("Verbindung fehlgeschlagen: ". $mysqli->connect_error);
    }
  }

  public function insert($sql)
   {
     mysqli_query($this->con, $sql);
   }


   public function read($table)
   {
     $sql="SELECT * FROM $table";
     $result = mysqli_query($this->con, $sql);

       while($row = mysqli_fetch_assoc($result))
       {
         $data[] = $row;
       }

        return $data;
    }




}

 ?>
