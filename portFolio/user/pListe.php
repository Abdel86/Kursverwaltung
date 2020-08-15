<?php
include('incUser\header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Alle pruefunge </h2>
      <table class="table">
        <thead>
         <tr>
          <th scope="col"> pruefungnummer </th>
          <th scope="col"> pruefungbeginn </th>
          <th scope="col"> pruefungende </th>
          <th scope="col"> TeilnehmerAnzahl </th>
          <th scope="col"> Anmelden </th>
         </tr>
        </thead>
      <tbody>
        <?php foreach ($db->read('pruefung') as $row): ?>
          <tr>
            <td scope="row"><?php echo $row['pruefungNummer'] ?></td>
            <td scope="row"><?php echo $row['pruefungBeginn'] ?></td>
            <td scope="row"><?php echo $row['pruefungEnde'] ?></td>
            <td scope="row"><?php echo $row['teilnehmerAnzahl'] ?></td>
            <td>
             <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
            </td>

          </tr>
          <?php endforeach; ?>
        </tbody>
      </div>
  </div>
</div>

<?php
include('incUser\footer.php');
?>
