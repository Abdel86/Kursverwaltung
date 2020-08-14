<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
  </head>
  <body>
    <div id="container">
    <header id="header"> 
        <nav>
            <h2> Kursverwaltung </h2> 
            <div class="navleiste">
                <a href="home.php">Startseite</a>
            </div>
        </nav>
    </header>
    <main>
        <div id="artcile">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
              sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
               Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                 sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                  At vero eos et accusam et justo duo dolores et ea rebum. Ste
        <?php
        
        session_start();
        
        require_once 'mysql.php';
        $db = new DB();
        
            if($db->isUserLoggedIn() === TRUE){
                echo "Du bist bereits einbgeloggt!  - <a href='index.php?section=logout' alt='Ausloggen'>(ausloggen)</a> ";
        
            }else{
                if(isset($_POST['einloggen'])) {
                    $nachname = $_POST['nachname'];
                    $passwort = $_POST['passwort'];
        
                    if($db->login($nachname, $passwort) === TRUE){
                        echo "Erfolgreich eingeloggt";
                        header('Location: firstpage.php');
                    }else{
                        echo "Einloggen fehlgeschlagen";
                    }
        
                }
            }
        
        ?>
    

        <p> Anmeldung </p> 
            <div class="login"> 
                <form method="POST" action="">
                    Ihr Username: <br> <input  id="nachname" name="nachname"><br>
                    Ihr Passwort: <br><input  name="passwort" type=password><br>
                    <input type="submit" name="einloggen" value="Login">
                </form>
            </div>
      
        </div> 
        <div id="aside"> 
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                 At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
         </div>
    </main>

    <footer> 
    </footer>
    </div>
    
  </body>
</html>




