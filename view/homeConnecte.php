<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <?php foreach ($articles as $article): ?>
          <a href="index.php?path=article&article=<?php echo $article->getId(); ?>#haut">
            <h2 class="post-title" style="color:lightblue">
              <?php echo $article -> getTitle(); ?><div id="haut"></div>
            </h2>
            <p>
              <?php echo $article -> getContent(); ?>
            </p>
          </a>
          <p class="post-meta"><?php echo $article -> getDateCreation(); ?></p>
            <h3 class="post-title">
              Commentaire :
            </h3>
            <form method='post' action='index.php?path=commentAdd#haut'>
                <input type='hidden' name='id_article' value='<?php echo $article->getId(); ?>' />
                <input type='text' name='message' class="message" placeholder='Message'></input><br>
                <input type='submit' class='myButton'style="margin-left:70%" value='Ajouter'/>
            </form>
              <?php
              if(count($article->getComments())==0){
                echo "<p class='post-meta'>Soyez le premier à commenter !<p>";
              }
              else foreach ($article->getComments() as $comment):
               echo "<p class='post-meta'>".$comment->getContent()."</p>"; ?>
            <p>
              <?php
              if($comment->getSignaler()== '0'){
                ?>
                <form method="post" action="index.php?path=signaler#haut">
                  <input type="hidden" name="idComm" value="<?php echo $comment->getId(); ?>"/>
                  <input class="submitBillet" type="submit" style="margin-left:70%" value="Signaler" title="signaler">
                </form>
                <?php
              }
              ?>
              <?php endforeach; ?>
              <?php
              if(count($article->getComments())>2){
                echo "<a href='index.php?path=article&article=".$article->getId()."#haut'><b> Voir tout les commentaires</b></a>";
              } ?>
            </p>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<hr>
