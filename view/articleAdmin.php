<div class="containerAdmin">
  <table>
    <?php foreach ($articles as $article): ?>
      <tr>
          <td style="width:15%"><?php echo $article -> getDateCreation(); ?></td>
          <td style="width:15%"><a href="index.php?article=<?php echo $article->getId(); ?>"><?php echo $article -> getTitle(); ?></a></td>
          <td><?php echo $article -> getResume(); ?></td>
          <td style="width:15%">Modifier / Supprimer</td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
