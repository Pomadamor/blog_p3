<?php
require_once("model/CommentRepository.php");

class ControllerSignaler{
  public static function signalEffect() {
    if (!empty($_POST['idComm'])){
      $idComm= $_POST['idComm'];

      $signAc = new CommentRepository();
      $sigEf =$signAc -> signalActif($idComm);
      header("Location:index.php");
    }
  }

}
