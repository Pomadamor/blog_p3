<?php
// require_once("model/CommentRepository.php");

class ControllerComment{
  public static function accepterComment() {
    $id= htmlspecialchars($_POST['id']);

    if (!empty($id)){

      $acceptAc = new CommentRepository();
      $acceptEf =$acceptAc -> commentOk($id);
      header("Location:index.php?path=commentAdmin");
    }
  }

  public static function supprimerComment() {
    $userRepo = new UserRepository();
    $user = $userRepo->getLoggedUser();
    $id= htmlspecialchars($_POST['id']);
    if (!empty($id)){
      $suppAc = new CommentRepository();
      $suppEf =$suppAc -> commentSup($id);
      if($user === false){
        header("Location:index.php");
      }
      elseif($user->getAdmin() == True){
        header("Location:index.php?path=commentAdmin#haut");
      }else{
        header("Location:index.php?path=commentConnect#haut");
      }
    }
  }

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
    }else{
      echo "Veuillez écrire un commentaire - <a href='index.php'>Rééssayer</a>";

    }
  }


}
