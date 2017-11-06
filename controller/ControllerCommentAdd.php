<?php
require_once("model/CommentRepository.php");

class ControllerCommentAdd{

  public static function commentAdd() {
    $id_article = htmlspecialchars($_POST['id_article']);
    $userRepo = new UserRepository();
    $user= $userRepo -> getLoggedUser();
    $message= htmlspecialchars($_POST['message']);

    if(!empty($id_article)&&(!empty($message))) {
      $comment = new Comment();
      $comment -> setId_article($id_article);
      $comment -> setId_user($user->getId());
      $comment -> setContent($message);

      $commentAdd = new CommentRepository();
      $addComment = $commentAdd -> addComment($comment);
      header("Location:index.php");
    }
  }

}
