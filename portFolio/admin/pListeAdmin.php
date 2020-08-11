<?php
include('incAdmin\header.php');
include('C:\xampp\htdocs\projekt\portFolio\class\pruefung.php');
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Alle Prüfungen </h2>
        <table class="table">
          <thead>
           <tr>
            <th scope="col"> Prüfungsnummer </th>
            <th scope="col"> Prüfungsbeginn </th>
            <th scope="col"> Prüfungsende </th>
            <th scope="col"> TeilnehmerAnzahl </th>
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
             <a href="" class="btn btn-primary"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
            </td>
            <td>
             <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
            </td>
            <td>
             <a href="" class="btn btn-danger"><i class="fa fa-close"></i></a>
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
