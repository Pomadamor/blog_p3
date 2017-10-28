<?php
require_once("model/CommentRepository.php");

class ControllerComment{
  public static function accepterComment() {
    if (!empty($_POST['id'])){
      $id= $_POST['id'];

      $acceptAc = new CommentRepository();
      $acceptEf =$acceptAc -> commentOk($id);
      header("Location:index.php");
    }
  }

  public static function supprimerComment() {
    if (!empty($_POST['id'])){
      $id= $_POST['id'];

      $suppAc = new CommentRepository();
      $suppEf =$suppAc -> commentSup($id);
      header("Location:index.php");
    }
  }

}
