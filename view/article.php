<div class="container">
   <h1 style="color:lightblue"><?php echo $articles -> getTitle(); ?><div id="haut"></div></h1>
   <p><?php  echo $articles -> getContent()?></p>
   <p style="text-align:right"><?php  echo $articles -> getDateCreation()?></p>
   <p><a href="index.php">Retour</a></p>
   <div class="containerComment">
     <h2>Commentaires :</h2>
     <?php foreach ($articles->getComments() as $comment): ?>
       <div class="comment">
         <p><?php echo $comment->getContent(); ?></p>
         <p style="text-align:right"><?php  echo $comment -> getDateCreation()?></p>
         <?php
             if($comment->getSignaler()== '0'){
             ?>
             <form method="post" action="index.php?signaler#haut">
               <input type="hidden" name="idComm" value="<?php echo $comment->getId(); ?>"/>
               <input class="submitBillet" type="submit" value="signaler" title="signaler">
             </form>
             <?php
            }?>
        </div>
      <?php endforeach; ?>
   </div>
</div>
