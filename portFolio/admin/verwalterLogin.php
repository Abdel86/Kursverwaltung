<?php
include('headerhome.php');
session_start();

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
include('incAdmin/footer.php');


 ?>
