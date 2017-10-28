<div class="containerAdmin">
  <table>
    <?php foreach ($comments as $comment):
      if($comment->getSignaler()== '1'){
        echo "<tr id='signalOk'>";
      }else echo "<tr id='signalNo'>"
    ?>
        <td style="width:15%"><?php echo $comment -> getDateCreation(); ?></td>
        <td style="width:15%"><?php echo $comment -> getAuthor(); ?></td>
        <td style="width:55%"><?php echo $comment -> getContent(); ?></td>
        <td style="width:15%">Modifier / Supprimer</td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
