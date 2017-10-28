<?php

session_start();
//On démarre la session
include 'controller/Controller.php';
include 'controller/ControllerLogin.php';
include 'controller/ControllerUser.php';
include 'controller/ControllerSignaler.php';
include 'controller/ControllerDeconnexion.php';
include 'controller/ControllerCommentAdd.php';


$user = ControllerUser::userActif();

$controller= new Controller();
if(empty($_SERVER['QUERY_STRING'])){
  $controller->homeController();
}

elseif(isset($_GET['article'])){
  $controller->articleController($_GET['article']);
}

elseif(isset($_GET['connexion'])){
  $controller->connexionController($_GET['connexion']);
}

elseif(isset($_GET['articleAdmin'])){
  $controller->articleAdmin($_GET['articleAdmin']);
}

elseif(isset($_GET['login'])){
  ControllerLogin::getLogin();
}

elseif(isset($_GET['deconnexion'])){
  ControllerDeconnexion::deconnexionController();
}

elseif(isset($_GET['signaler'])){
   ControllerSignaler::signalEffect();
}

elseif(isset($_GET['commentAdd'])){
   ControllerCommentAdd::commentAdd();
}

elseif(isset($_GET['administration'])){
  $controller->administrateurController($_GET['administration']);
}

else{
  $controller->errorController();
}
