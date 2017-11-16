<?php
require_once("model/CommentRepository.php");

class ControllerComment{
  public static function accepterComment() {
    $id= htmlspecialchars($_POST['id']);

    if (!empty($id)){

      $acceptAc = new CommentRepository();
      $acceptEf =$acceptAc -> commentOk($id);
      header("Location:index?commentAdmin.php");
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
        header("Location:index.php?commentAdmin#haut");
      }else{
        header("Location:index.php?commentConnect#haut");
      }
    }
  }

}
