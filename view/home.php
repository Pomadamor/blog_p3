<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <?php foreach ($articles as $article): ?>
          <a href="index.php?article#haut=<?php echo $article->getId(); ?>">
            <h2 class="post-title" style="color:lightblue"><div id="haut"></div>
              <?php echo $article -> getTitle(); ?>
            </h2>
            <p>
              <?php echo $article -> getContent(); ?>
            </p>
          </a>
          <p class="post-meta"><?php echo $article -> getDateCreation(); ?></p>
            <h3 class="post-title">
              Commentaire :
            </h3>
            <p class="post-meta">>
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
                <form method="post" action="index.php?signaler#haut">
                  <input type="hidden" name="idComm" value="<?php echo $comment->getId(); ?>"/>
                  <input class="submitBillet" type="submit" style="margin-left:70%" value="Signaler" title="signaler">
                </form>
                <?php
              }
              ?>
              <?php endforeach; ?>
              <?php
              if(count($article->getComments())>2){
                echo "<a href='index.php?article=".$article->getId()."#haut'><b> Voir tout les commentaires</b></a>";
              } ?>
            </p>
          <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<hr>
