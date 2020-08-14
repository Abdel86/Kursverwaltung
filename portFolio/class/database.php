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

  private $successAdd = " Your Record Have Been Added";
    private $updatedSuccess = " Your Record Have Been Updated";
    private $deletedSuccess = " Your Record Have Been Deleted";


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

    public function delete($table,$id)
      {
          $sql = "DELETE FROM $table WHERE `kursID`='$id' ";
          $result = mysqli_query($this->con,$sql);
          if(mysqli_query($this->con,$sql))
          {
              return $this->deletedSuccess;
          }
          else
          {
              return die("Error : ".mysqli_error($this->con));
          }
      }


    public function find($table,$id)
    {
        $id = filter_var($id,FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM $table WHERE `kursID`='$id' LIMIT 1 ";
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






    // update data in db
    public function update($sql)
    {
        $result = mysqli_query($this->con,$sql);
        if(mysqli_query($this->con,$sql))
        {
            return $this->updatedSuccess;
        }
        else
        {
            return die("Error : ".mysqli_error($this->con));
        }
    }






}

 ?>
