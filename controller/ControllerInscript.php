<?php
// require_once("model/UserRepository.php");

class ControllerInscript{
  public static function getInscript() {
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail   = htmlspecialchars($_POST['mail']);
    $mdp    = htmlspecialchars($_POST['pass']);


    if ( !empty($prenom) && !empty($mail) && !empty($mdp)) {
      $user = new User();
      $user->setPrenom($prenom);
      $user->setMail($mail);
      $user->setMdp($mdp);

      $userRepo    = new UserRepository();
      $getInscript = $userRepo -> add($user);

      if ($getInscript == True) {
        header("Location:index.php?path=connexion#haut");
      } else {
        echo "erreur d'inscription";
      }
    }
    else {
      echo 'Les champs ne sont pas correctement remplis: <a href="index.php" temp_href="inscription.php">Reessayer</a>';
    }
  }

}
