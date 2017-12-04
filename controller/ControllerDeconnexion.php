<?php

class ControllerDeconnexion{
  public function deconnexionController() {
    	session_destroy();
      header("Location:index.php");
  }
}
