<?php

class ControllerDeconnexion{
  public static function deconnexionController() {
    	session_destroy();
      header("Location:index.php"); 
  }
}
