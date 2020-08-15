<?php
include('incAdmin\header.php');
include('C:\xampp\htdocs\projekt\portFolio\class\pruefung.php');
?>


<?php  $row = $db->find('pruefung','pruefungID', $_GET['id']); ?>
<?php if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):  ?>


<?php
$error = "";
$success = "";
if(isset($_POST['submit']))
{
  $nummer = $_POST['nummer'];
  $beginn = $_POST['beginn'];
  $ende = $_POST['ende'];
  $anzahl = $_POST['anzahl'];

  $sql = "UPDATE pruefung SET `pruefungNummer`='$nummer',`pruefungBeginn`='$beginn',`pruefungEnde`='$ende',
                    `teilnehmerAnzahl`='$anzahl' WHERE `pruefungID`='$row[pruefungID]' ";

          $result = $db->update($sql);
          if($result)
          {
            $success = "Eingabe erfolgreich zugefügt";
          }
}
 ?>


<h1 class="text-center col-12 bg-dark py-3 text-white my-2"> Prüfung Ändern</h1>

<?php if($error): ?>
  <h5 class="alert alert-danger text-center"><?php echo $error ?></h5>
<?php endif; ?>
<?php if($success): ?>
  <h5 class="alert alert-success text-center"><?php echo $success ?></h5>
<?php endif; ?>
<div class="col-md-6 offset-md-3">
  <form class="my-2 p-3 border" method="post" action="">
    <div class="form-group">
      <label for="inputNummer">Nummer</label>
      <input type="text" name="nummer" value="<?php echo $row['pruefungID']?>" class="form-control" id="inputNummer">
    </div>
    <div class="form-group">
      <label for="inputBeginn">Beginn</label>
      <input type="date" name="beginn" value="<?php echo $row['pruefungBeginn']?>" class="form-control" id="inputBeginn">
    </div>
    <div class="form-group">
      <label for="inputEnde">Ende</label>
      <input type="date" name="ende" value="<?php echo $row['pruefungEnde']?>" class="form-control" id="inputEnde">
    </div>
    <div class="form-group">
      <label for="inputAnzahl">Teilnehmeranzahl</label>
      <input type="number" name="anzahl" value="<?php echo $row['teilnehmerAnzahl']?>" class="form-control" id="inputAnzahl">
    </div>

    <button type="submit" name="submit" class=" btn btn-dark">Speichern</button>
  </form>
</div>
<?php  endif;  ?>

<?php
include('incAdmin\footer.php')
 ?>
