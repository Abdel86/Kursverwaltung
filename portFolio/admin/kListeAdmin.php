<?php
include('incAdmin\header.php');
include('C:\xampp\htdocs\projekt\portFolio\class\kurs.php');


?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Alle Kurse </h2>
      <table class="table">
        <thead>
         <tr>
          <th scope="col"> Kursnummer </th>
          <th scope="col"> Kursbeginn </th>
          <th scope="col"> Kursende </th>
          <th scope="col"> TeilnehmerAnzahl </th>
         </tr>
        </thead>
      <tbody>
        <?php foreach ($db->read('kurs') as $row): ?>
          <tr>
            <td scope="row"><?php echo $row['kursNummer'] ?></td>
            <td scope="row"><?php echo $row['kursBeginn'] ?></td>
            <td scope="row"><?php echo $row['kursEnde'] ?></td>
            <td scope="row"><?php echo $row['teilnehmerAnzahl'] ?></td>
            <td>
             <a href="" class="btn btn-primary"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
            </td>
            <td>
             <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
            </td>
            <td>
             <a href="" class="btn btn-danger" href="addKurs.php?id=<?php echo $row['kursNummer']; ?>"><i class="fa fa-close"></i></a>
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

 ?>
