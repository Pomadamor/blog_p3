<?php
require("model/UserRepository.php");

class ControllerLogin{
  public static function getLogin() {

    if ( !empty($_POST['mail']) && !empty($_POST['pass'])) {
    		$login=$_POST['mail'];
    		$pass=$_POST['pass'];

    		$userRepo = new UserRepository();
        $getLogin=$userRepo -> LogUser($login, $pass);

    		if ($getLogin == True) {
    			echo 'tu es sur le bon chemin';
    		} else {
    			echo 'mauvais login / mot de passe';
    		}
    }
    else {
      echo 'Veuillez saisir toutes les informations pour vous connecter : <a href="index.php" temp_href="connexion.php">Reessayer</a>';
    }
  }

}
