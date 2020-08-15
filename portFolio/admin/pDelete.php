<?php include('incAdmin\header.php');?>

<?php  $row = $db->find('pruefung','pruefungID',$_GET['id']); ?>
<?php if(isset($_GET['id']) && is_numeric($_GET['id']) && $row):  ?>
<?php echo $db->delete('pruefung','pruefungID',$row['id']); ?>

<?php  endif;  ?>

<h1 class="text-center col-12 bg-danger py-3 text-white my-2">Prüfung gelöscht</h1>
<?php header("refresh:3;url=pListeAdmin.php");?>



<?php include('incAdmin\footer.php') ?>
