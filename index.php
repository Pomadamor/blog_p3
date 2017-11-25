<?php

//On démarre la session
session_start();

include_once ('_config.php');
MyAutoload::start();

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

elseif(isset($_GET['mentionLegale'])){
  $controller->mentionController($_GET['mentionLegale']);
}

elseif(isset($_GET['inscription'])){
  $controller->inscriptionController($_GET['inscription']);
}

elseif(isset($_GET['commentConnect'])){
  $controller->commentController($_GET['commentConnect']);
}

elseif(isset($_GET['articleAdmin'])){
  $controller->articleAdmin($_GET['articleAdmin']);
}

elseif(isset($_GET['commentAdmin'])){
  $controller->commentAdmin($_GET['commentAdmin']);
}

elseif(isset($_GET['articleAdd'])){
  $controller->articleAdd($_GET['articleAdd']);
}

elseif(isset($_GET['login'])){
  ControllerLogin::getLogin();
}

elseif(isset($_GET['inscripValid'])){
  ControllerInscript::getInscript();
}

elseif(isset($_GET['deconnexion'])){
  ControllerDeconnexion::deconnexionController();
}

elseif(isset($_GET['signaler'])){
   ControllerSignaler::signalEffect();
}

elseif(isset($_GET['modifierArticle'])){
   $controller->modifierArticle($_POST['id']);
}

elseif(isset($_GET['articleModifier'])){
  ControllerArticle::modifierArticle();
}

elseif(isset($_GET['supprimerArticle'])){
  ControllerArticle::supprimerArticle();
}

elseif(isset($_GET['accepterComment'])){
  ControllerComment::accepterComment();
}

elseif(isset($_GET['supprimerComment'])){
   ControllerComment::supprimerComment();
}

elseif(isset($_GET['commentAdd'])){
   ControllerCommentAdd::commentAdd();
}

elseif(isset($_GET['articleAddAdmin'])){
   ControllerArticle::articleAddAdmin();
}

else{
  $controller->errorController();
}
