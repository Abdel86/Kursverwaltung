<?php include('incAdmin\header.php');?>

<?php  $row = $db->find('kurs','kursID',$_GET['id']); ?>
<?php if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):  ?>
<?php echo $db->delete('kurs','kursID',$row['id']); ?>

<?php  endif;  ?>

<h1 class="text-center col-12 bg-danger py-3 text-white my-2">Kurs gelöscht</h1>
<?php header("refresh:1;url=kListeAdmin.php");?>



<?php include('incAdmin\footer.php') ?>
