<?php
include('headerhome.php');
session_start();
require_once 'mysql.php';
$db = new DB();
if($db->isUserLoggedIn() === TRUE){
  echo "Du bist bereits einbgeloggt!  - <a href='index.php?section=logout' alt='Ausloggen'>(ausloggen)</a> ";

}else{
  if(isset($_POST['einloggen'])) {
      $name = $_POST['name'];
      $passwort = $_POST['password'];

      if($db->verwalterLogin($name, $passwort) === TRUE){
          echo "Erfolgreich eingeloggt";
          header('Location: addKurs.php');
      }else{
          echo "Einloggen fehlgeschlagen";
      }

  }
}
?>

<div class="container">
<div id="article">
         
<div class="col-md-6 offset-md-3">
<a>Verwalter-Login</a>   
  <form class="my-2 p-3 border" method="post" action="">
    <div class="form-group">
      <label for="inputNummer">Name</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="inputname">Password</label>
      <input type="password" name="password" class="form-control" id="inputBeginn">
    </div>

    <button type="submit" name="einloggen" class=" btn btn-dark">Login </button>
  </form>   
  
      </div>
</div>

<?php
include('footer.php');


 ?>