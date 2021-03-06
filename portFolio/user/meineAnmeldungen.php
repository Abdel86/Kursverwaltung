<?php
include('incUser\header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="p-3 col text-center mt-5 text-white bg-dark"> Meine Kurse </h2>
      <table class="table">
        <thead>
         <tr>
          <th scope="col"> Kursnummer </th>
          <th scope="col"> Kursname</th>
          <th scope="col"> Kursbeginn </th>
          <th scope="col"> Kursende </th>
          <th scope="col"> Kosten </th>
         </tr>
        </thead>
      <tbody>

        <?php foreach ($db->read('kurs') as $row): ?>
          <tr>
            <td scope="row"><?php echo $row['kursNummer'] ?></td>
            <td scope="row"><?php echo $row['kursName'] ?></td>
            <td scope="row"><?php echo $row['kursBeginn'] ?></td>
            <td scope="row"><?php echo $row['kursEnde'] ?></td>
            <td scope="row"><?php echo $row['kosten'] ?></td>

          </tr>
        <?php endforeach; ?>


        </tbody>
      </div>
  </div>
</div>

<?php
include('incUser\footer.php');
?>
