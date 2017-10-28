<?php include("header.php"); ?>
<div class="container">
   <h1><?php echo $articles -> getTitle(); ?></h1>
   <p><?php  echo $articles -> getContent()?></p>
   <p style="text-align:right"><?php  echo $articles -> getDateCreation()?></p>
   <p><a href="index.php">Retour</a></p>
   <div class="formComment">
     <h2>Ajouté un commentaire :</h2>
     <form method='post' action='index.php?commentAdd'>
         <input type='hidden' name='id_article' value='<?php echo $articles->getId(); ?>' />
         <input type='text' name='pseudo' placeholder='Pseudo'></input><br>
         <input type='text' name='message' class="messCom" placeholder='Message'></input><br>
         <input type='submit' class='myButton' value='Ajouter'/>
     </form>
   </div>
   <div class="containerComment">
     <h2>Commentaires :</h2>
     <?php foreach ($articles->getComments() as $comment): ?>
       <div class="comment">
         <p><?php echo $comment->getContent(); ?></p>
         <p style="text-align:right"><?php  echo $comment -> getDateCreation()?></p>
         <?php
             if($comment->getSignaler()== '0'){
             ?>
             <form method="post" action="index.php?signaler">
               <input type="hidden" name="idComm" value="<?php echo $comment->getId(); ?>"/>
               <input class="submitBillet" type="submit" value="signaler" title="signaler">
             </form>
             <?php
            }?>
        </div>
      <?php endforeach; ?>
   </div>
</div>
<?php include("footer.php"); ?>
