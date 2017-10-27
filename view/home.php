<?php include("header.php"); ?>
        <div class="container">
          <?php var_dump($_SESSION); ?>
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

                        <?php foreach ($article->getComments() as $comment): ?>
                        <tr>
                          <th colspan="2">Commentaire :</th>
                        </tr>
                        <tr>
                          <td><?php echo $comment->getContent(); ?></td>
                          <td>signaler</td>
                        </tr>
                        <tr>
                          <td colspan ="2"><a href="index.php?article=<?php echo $article->getId(); ?>">Voir tout les commentaires</a></td>
                        <?php endforeach; ?>
                      </table>
                    </td>
                    <td>
                        <form method='post' action='commentaire.php'>
                            <input type='hidden' name='id_billet' value='<?php echo $donnees['id_billet']; ?>' />
                            <input type='text' name='pseudo' placeholder='Pseudo'></input><br>
                            <input type='email' name='email' placeholder='Email'></input><br>
                            <input type='text' name='message' class="messCom" placeholder='Message'></input><br>
                            <input type='submit' class='myButton' value='Ajouter'/>
                        </form>
                    </td>
                </tr>
              </table>
          <?php endforeach; ?>
        </div>
<?php include("footer.php"); ?>
