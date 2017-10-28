<?php
require_once("model/CommentRepository.php");

class ControllerCommentAdd{
  public static function commentAdd() {
    if ((!empty($_POST['id_article']))&&(!empty($_POST['pseudo']))&&(!empty($_POST['message']))){
      $comment = new Comment();
      $comment -> setId_article($_POST['id_article']);
      $comment -> setAuthor($_POST['pseudo']);
      $comment -> setContent($_POST['message']);

      $commentAdd = new CommentRepository();
      $addComment = $commentAdd -> addComment($comment);
      header("Location:index.php");
    }
  }

}
