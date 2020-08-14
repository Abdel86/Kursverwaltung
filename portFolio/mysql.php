<?php
class DB {
    private static $_db_username = "root";
    private static $_db_password = "";
    private static $_db_host = "localhost";
    private static $_db_name = "Kursverwaltung";
    private static $_db;

    function __construct(){
        try{
            
            self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name, self::$_db_username, self::$_db_password);

        }catch(PDOException $e){

            echo "Datenbankverbindung gescheitert!";
            die();

        }
    }

    function isUserLoggedIn(){
        $stmt = self::$_db->prepare("SELECT teilnehmerID FROM teilnehmer WHERE Session=:sid");
        $sessionid = session_id();
        $stmt->bindParam(":sid", $sessionid);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            return true;

        }else{
            return false;
        }


    }

    function login($username, $pw){
        $stmt = self::$_db->prepare("SELECT teilnehmerID FROM Teilnehmer WHERE teilnehmerName=:userName AND password=:pw");
        $stmt->bindParam(":userName", $username);
        $stmt->bindParam(":pw", $pw);
        $stmt->execute();

        if($stmt->rowCount() === 1){
            $stmt = self::$_db->prepare("UPDATE Teilnehmer SET Session =:sid WHERE teilnehmerName =:userName AND password=:pw");
            $sessionID = session_id();
            $stmt->bindParam(":sid", $sessionID);
            $stmt->bindParam(":userName", $username);
            $stmt->bindParam(":pw", $pw);
            $stmt->execute();

            return true;
        }else{
            return false;
        }

    
    }

    function registrieren( $name, $email, $pw ){
        if($stmt = self::$_db->prepare("INSERT INTO Teilnehmer(teilnehmerName, teilnehmerEmail, password) VALUES ( :name, :email, :password)")){
        
        #$stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $pw);
        #$stmt->bindParam(":session", $session);
        $stmt->execute();
        return true;
        }else{
            return false;
        }
    }    
    // Schreibt den Fremdschlüssel dozentenID von Dozent in Kurse
    function schreiben($kA, $dA){
        if($stmt = self::$_db->prepare("UPDATE Kurse SET Kurse.dozentID ='2'")){
            $stmt->bindParam(":kursName", $kA);
           # $stmt->bindParam(":dozentname", $dA);
            $stmt->execute();
            return true;
            }else{
                return false;
            }
    }
    // Ermittelt die Anzahl der gesamten Teilnehmer
    function teilnehmerZaehlen(){
        $stmt = self::$_db->prepare("SELECT COUNT(teilnehmerID) AS anzahl FROM Teilnehmer");
            $stmt->execute();
            $row = $stmt->fetch();
            echo "Es wurden ".$row['anzahl']." Teilnehmer gefunden";
    }

     // Ermittelt die Anzahl der gesamten Kurse/Prüfungen
    function kurseZaehlen(){
        $stmt = self::$_db->prepare("SELECT COUNT(kursID) AS anzahl FROM Kurse");
            $stmt->execute();
            $row = $stmt->fetch();
            echo "Es wurden ".$row['anzahl']." Kurse gefunden";
        }

     // Ermittelt die Anzahl der unterichtenden Dozenten
     function dozentenInArbeitZaehlen(){
        $stmt = self::$_db->prepare("SELECT COUNT(dozentID) AS anzahl FROM Kurse");
            $stmt->execute();
            $row = $stmt->fetch();
            echo "Es wurden ".$row['anzahl']." Kurse gefunden";
        }

    // Ermittelt die Anzahl der  Prüfungen
     function pruefungZaehlen(){
        $stmt = self::$_db->prepare("SELECT COUNT(pruefungsID) AS anzahl FROM Pruefung");
            $stmt->execute();
            $row = $stmt->fetch();
            echo "Es wurden ".$row['anzahl']." Kurse gefunden";
        }
    // Ausgabe der Dozenten-Name aus der TAbelle Dozente
    function dozentAusgeben(){

        try{
            $stmt = self::$_db->prepare("SELECT dozentName FROM Dozent");
            $stmt->execute();
            $results=$stmt->fetchAll();
        }catch(Exception $ex)
        {
            echo($ex -> getMessage());
        }
    }
        
    
    // die Bestehende  Session wird gelöscht
    function sessionLoeschen(){
        $stmt = self::$_db->prepare("UPDATE Teilnehmer SET Session = '' WHERE Session= :sid");
        $sessionID = session_id();
        $stmt->bindParam(":sid", $sessionID);   
        $stmt->execute();
    }
    function ausgabe(){
        $statement = self::$_db->prepare("SELECT kursNummer, kursZeit, kursBeginn, kursEnde FROM Kurse");
              $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
              $statement->execute();

              // Datensätze auslesen
              echo "<table border='1'>\n";
              echo "<tr><td>" . "Kursnummer" ."</td>"
              ."<td>" . "Kurszeit" ."</td>"
              ."<td>"."Kursbeginn" ."</td>"
              ."<td>"."Kursende" ."</td>"
              ."</tr>\n";
              while ($row = $statement->fetch()) {

              // htmlentities() wandelt alle Zeichen, die eine HTML-Code-Entsprechung haben um
                $kursNummer = htmlspecialchars($row['kursNummer'], ENT_HTML5, 'UTF-8');
                $kursZeit = htmlspecialchars($row['kursZeit'], ENT_HTML5, 'UTF-8');
                // Datum formatieren
            $kursBeginn = new DateTime($row['kursBeginn']);
             $dateFormatted = $kursBeginn->format('d.m.y H:i');
             $kursEnde = new DateTime($row['kursEnde']);
             $dateFormatted2 = $kursEnde->format('d.m.y H:i');
              // Datensätze ausgeben
                /*'<p>
                Kursnummer ' . $kursNummer . ' Kurssemester ' . $kursZeit . ' Kursbeginn ' . $dateFormatted . ' Kursende '. $dateFormatted2. ' </a><br>
                </p>';*/
                
                echo "<tr><td>" . $kursNummer ."</td>"
                ."<td>" . $kursZeit ."</td>"
                ."<td>".$dateFormatted ."</td>"
                ."<td>".$dateFormatted2 ."</td>"
                ."</tr>\n";
                
                
             }
             echo "</table>";
    }
}

?>