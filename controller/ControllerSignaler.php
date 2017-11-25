<?php
// require_once("model/CommentRepository.php");

class ControllerSignaler{
  public static function signalEffect() {
    $idComm= htmlspecialchars($_POST['idComm']);

    if (!empty($idComm)){

      $signAc = new CommentRepository();
      $sigEf =$signAc -> signalActif($idComm);
      header("Location:index.php");
    }
  }

}
