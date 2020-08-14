<?php include('incAdmin\header.php');?>

<?php  $row = $db->find('kurs',$_GET['id']);
 if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):
   $db->delete('kurs',$row['kursID'], $_GET['id']); ?>
<h1 class="text-center col-12 bg-danger py-3 text-white my-2">User gelöscht</h1>
<?php header("refresh:3;url=kListeAdmin.php");
endif;  ?>

<?php  $row = $db->find('pruefung',$_GET['id']);
 if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):
   $db->delete('kurs',$row['kursID'], $_GET['id']); ?>
<h1 class="text-center col-12 bg-danger py-3 text-white my-2">User gelöscht</h1>
<?php header("refresh:3;url=kListeAdmin.php");
endif;  ?>

<?php include('incAdmin\footer.php') ?>
