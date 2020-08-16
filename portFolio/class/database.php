<?php
/**
 * [Diese Klasse stellt die Verbindung zur Datenbank ]
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
     return mysqli_query($this->con, $sql);
   }

/**
 * [die Funktion liest die Zeilen in der Tabelle und gibt sie zurueck]
 * @param  [type] $table [description]
 * @return [type]        [description]
 */
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

/**
 * [die Funktion löscht die Zeilen in der Tabelle]
 * @param  [type] $table [description]
 * @param  [type] $tabID [description]
 * @param  [type] $id    [description]
 * @return [type]        [description]
 */
    public function delete($table, $tabID, $id)
      {
          $sql = "DELETE FROM $table WHERE `$tabID`='$id' ";
          $result = mysqli_query($this->con,$sql);
          if(mysqli_query($this->con,$sql))
          {
              return true;
          }
          else
          {
              return die("Error : ".mysqli_error($this->con));
          }
      }


    public function find($table, $tabID, $id)
    {
        $id = filter_var($id,FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM $table WHERE `$tabID`='$id' LIMIT 1 ";
        $result = mysqli_query($this->con,$sql);
        if(mysqli_query($this->con,$sql))
        {
            if (mysqli_num_rows($result) > 0)
            {
              return mysqli_fetch_assoc($result);
            }
            else
            {
                return false;
            }
        }
        else
        {
            return die("Error : ".mysqli_error($this->con));
        }
    }






    /**
     * [die Funktion ändert die Zeilen in der Tabelle]
     * @param  [type] $sql [description]
     * @return [type]      [description]
     */
    public function update($sql)
    {
        $result = mysqli_query($this->con,$sql);
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
        else
        {
            return die("Error : ".mysqli_error($this->con));
        }
    }








}

 ?>
