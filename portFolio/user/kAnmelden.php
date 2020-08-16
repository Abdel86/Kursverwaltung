<?php
include('incUser\header.php');
?>

<?php
$error ="";
$success ="";
$id = $_GET['id'];
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO teilnehmer (teilnehmerName, teilnehmerEmail, kursID)
values('$name', '$email','$id')";
$result = $db->insert($sql);
}
 ?>

<h1 class="text-center col-12 bg-dark py-3 text-white my-2"> Kurs Anmelden</h1>

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
      <input type="text" name="nummer" value="<?php echo $id;?>" class="form-control" id="inputNummer">
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" name="name" class="form-control" id="inputName">
    </div>
    <div class="form-group">
      <label for="inputBeginn">Email</label>
      <input type="email" name="email" class="form-control" id="inputBeginn">
    </div>

    <button type="submit" name="submit" class=" btn btn-dark">Speichern</button>
  </form>
</div>


<?php include('incUser\footer.php') ?>
