<?php include('incAdmin\header.php');?>

<?php  $row = $db->find('kurs',$_GET['id']); ?>
<?php if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):  ?>

<div class="container">
    <div class="row">
      <h2 class="text-center col-12 bg-danger py-3 text-white my-2">Kurs gelöscht </h2>
        <div class="col-sm-12">
          <?php $db->delete('kurs',$row['kursID']); ?>
        </div>
    </div>
</div>
<?php  endif;  ?>

<?php header("refresh:1;url=kListeAdmin.php");?>





<?php include('incAdmin\footer.php') ?>
