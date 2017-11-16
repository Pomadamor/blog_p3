<div class="containerAdmin">
  <table><div id="haut"></div>
    <?php foreach ($comments as $comment):
      if($comment->getSignaler()== '1'){
        echo "<tr id='signalOk'>";
      }else echo "<tr id='signalNo'>"
    ?>
        <td style="width:15%"><?php echo $comment -> getDateCreation(); ?></td>
        <td style="width:55%"><?php echo $comment -> getContent(); ?></td>
        <td style="width:15%">
          <form method="post" action="index.php?supprimerComment#haut">
            <input type="hidden" name="id" value="<?php echo $comment->getId(); ?>"/>
            <input class="submitBillet" type="submit" value="&#9746;" title="Supprimer">
          </form>
        </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
