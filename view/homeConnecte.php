<div class="container">
  <?php foreach ($articles as $article): ?>
      <table>
          <tr>
              <th><a href="index.php?article=<?php echo $article->getId(); ?>"><?php echo $article -> getTitle(); ?></a></th>
              <th><?php echo $article -> getDateCreation(); ?></th>
          </tr>
          <tr>
              <td colspan="2"><?php echo $article -> getContent(); ?></td>
          </tr>
          <tr>
            <td>
              <table id="tableCommentaire">
                <tr>
                  <th colspan="2">Commentaire :</th>
                </tr>
                <?php
                  if(count($article->getComments())==0){
                    echo "<tr>
                            <td colspan ='2'>Soyez le premier à commenter !</td>
                          </tr>";
                  }
                  else foreach ($article->getComments() as $comment): ?>
                <tr>
                  <td><?php echo $comment->getContent(); ?></td>
                  <td>
                    <?php
                      if($comment->getSignaler()== '0'){
                    ?>
                    <form method="post" action="index.php?signaler">
                      <input type="hidden" name="idComm" value="<?php echo $comment->getId(); ?>"/>
                      <input class="submitBillet" type="submit" value="&#9872;" title="signaler">
                    </form>
                    <?php
                    }
                    ?>
                  </td>
                </tr>
                <?php endforeach; ?>
                <?php
                  if(count($article->getComments())>2){
                    echo "<tr>
                            <td colspan ='2'>
                              <a href='index.php?article=".$article->getId()."'> Voir tout les commentaires</a>
                            </td>
                          </tr>";
                  } ?>
              </table>
            </td>
            <td>
                <form method='post' action='index.php?commentAdd'>
                    <input type='hidden' name='id_article' value='<?php echo $article->getId(); ?>' />
                    <input type='text' name='pseudo' placeholder='Pseudo'></input><br>
                    <input type='text' name='message' class="messCom" placeholder='Message'></input><br>
                    <input type='submit' class='myButton' value='Ajouter'/>
                </form>
            </td>
        </tr>
      </table>
  <?php endforeach; ?>
</div>
