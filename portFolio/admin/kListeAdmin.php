<?php
include('incAdmin\header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Alle Kurse </h2>
      <table class="table">
        <thead>
         <tr>
          <th scope="col"> Kursnummer </th>
          <th scope="col"> Kursname </th>
          <th scope="col"> Kursbeginn </th>
          <th scope="col"> Kursende </th>
          <th scope="col"> TeilnehmerAnzahl </th>
          <th scope="col"> Ändern </th>
          <th scope="col"> Löschen </th>
         </tr>
        </thead>
      <tbody>
        <?php foreach ($db->read('kurs') as $row): ?>
          <tr>
            <td scope="row"><?php echo $row['kursNummer'] ?></td>
            <td scope="row"><?php echo $row['kursName'] ?></td>
            <td scope="row"><?php echo $row['kursBeginn'] ?></td>
            <td scope="row"><?php echo $row['kursEnde'] ?></td>
            <td scope="row"><?php echo $row['teilnehmerAnzahl'] ?></td>
            <td>
             <a href="kEdite.php?id=<?php echo $row['kursID']?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
            </td>
            <td>
             <a href="kDelete.php?id=<?php echo $row['kursID']?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </div>
  </div>
</div>

<?php
include('incAdmin\footer.php');
?>
