<?php

class DatabaseConnexion {

  public function getDatabaseConnect() {
    try
    {
      $dsn = "mysql:host=localhost;dbname=blog-p3-MVC";
      $db_user = "lerna";
      $db_mdp = "lerna";

      $db = new PDO($dsn,$db_user,$db_mdp);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }

    return $db;
  }

}
