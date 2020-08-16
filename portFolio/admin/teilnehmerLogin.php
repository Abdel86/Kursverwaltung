<?php
include('headerhome.php');

?>

<div class="container">
<div id="article">

<div class="col-md-6 offset-md-3">
<a>Teilnehmer-Login</a>
  <form class="my-2 p-3 border" method="post" action="">
    <div class="form-group">
      <label for="inputNummer">Name</label>
      <input type="text" name="name" class="form-control" id="inputname">
    </div>
    <div class="form-group">
      <label for="inputname">Password</label>
      <input type="password" name="password" class="form-control" id="inputBeginn">
    </div>

    <button type="submit" name="submit" class=" btn btn-dark">Login </button>
  </form>

      </div>
</div>

<?php
include('incAdmin/footer.php');


 ?>
