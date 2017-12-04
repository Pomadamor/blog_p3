<?php
// require("model/UserRepository.php");

class ControllerLogin{
  public function getLogin() {
    $login=htmlspecialchars($_POST['mail']);
    $pass=htmlspecialchars($_POST['pass']);


    if ( !empty($login) && !empty($pass)) {

    		$userRepo = new UserRepository();
        $getLogin=$userRepo -> LogUser($login, $pass);

    		if ($getLogin == True) {
    			header("Location:index.php");
    		} else {
    			echo 'mauvais login / mot de passe';
    		}
    }
    else {
      echo 'Veuillez saisir toutes les informations pour vous connecter : <a href="index.php" temp_href="connexion.php">Reessayer</a>';
    }
  }

}
