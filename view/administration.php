<?php include("header.php"); ?>
<div class="container">
   <h1><?php echo $articles -> getTitle(); ?></h1>
   <p><?php  echo $articles -> getContent()?></p>
   <p style="text-align:right"><?php  echo $articles -> getDateCreation()?></p>
   <p><a href="index.php">Retour</a></p>
 </div>
<?php include("footer.php"); ?>
