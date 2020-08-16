<?php
include('incUser\header.php');
?>


<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Alle Prüfungen </h2>
      <table class="table">
        <thead>
         <tr>
          <th scope="col"> Prüfungsnummer </th>
          <th scope="col"> Prüfungsname</th>
          <th scope="col"> Prüfungsbeginn </th>
          <th scope="col"> Prüfungsende </th>
          <th scope="col"> TeilnehmerAnzahl </th>
          <th scope="col"> Kosten </th>
          <th scope="col"> Anmelden </th>
         </tr>
        </thead>
      <tbody>
        <?php foreach ($db->read('pruefung') as $row): ?>
          <tr>
            <td scope="row"><?php echo $row['pruefungNummer'] ?></td>
            <td scope="row"><?php echo $row['pruefungName'] ?></td>
            <td scope="row"><?php echo $row['pruefungBeginn'] ?></td>
            <td scope="row"><?php echo $row['pruefungEnde'] ?></td>
            <td scope="row"><?php echo $row['teilnehmerAnzahl'] ?></td>
            <td scope="row"><?php echo $row['kosten'] ?></td>

            <td>
             <a href="pAnmelden.php?id=<?php echo $row['pruefungID']?>" class="btn btn-info"><i class="fa fa-registered"></i></a>
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
