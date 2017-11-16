<div class="containerArticleAdmin">
  <table><div id="haut"></div>
    <?php foreach ($articles as $article): ?>
      <tr>
          <td style="width:15%"><?php echo $article -> getDateCreation(); ?></td>
          <td style="width:15%"><a href="index.php?article=<?php echo $article->getId(); ?>#haut"><?php echo $article -> getTitle(); ?></a></td>
          <td><?php echo $article -> getResume(); ?></td>
          <td style="width:15%">
            <form method="post" action="index.php?modifierArticle#haut">
              <input type="hidden" name="id" value="<?php echo $article->getId(); ?>"/>
              <input class="submitBillet" type="submit" value="&plusmn;" title="Modifier">
            </form>
            <form method="post" action="index.php?supprimerArticle#haut">
              <input type="hidden" name="id" value="<?php echo $article->getId(); ?>"/>
              <input class="submitBillet" type="submit" value="&#9746;" title="Supprimer">
            </form>
          </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
