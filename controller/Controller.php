<?php

require("model/Article.php");
require("model/DatabaseConnexion.php");
require("model/ArticleRepository.php");


class Controller{
  public function homeController(){
    ob_start();
    $articleRepo=new ArticleRepository();
    $articles=$articleRepo->findAll('Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    $userRepo = new UserRepository();
    $user = $userRepo->getLoggedUser();
    if($user === false){
      include('view/header.php');
      include('view/home.php');
      include('view/footer.php');
    }elseif($user->getAdmin() == True){
      include('view/headerAdmin.php');
      include('view/homeConnecte.php');
      include('view/footerAdmin.php');
    }else{
      include('view/headerConnecte.php');
      include('view/homeConnecte.php');
      include('view/footerAdmin.php');
    }
    $html= ob_end_flush();
    return $html;
  }

  public function articleController($id){
    ob_start();
    $articleRepo=new ArticleRepository();
    $articles=$articleRepo->find($id, 'Article');
    $articles->fetchCommentsAll();
    $userRepo = new UserRepository();
    $user = $userRepo->getLoggedUser();
    if($user === false){
      include('view/header.php');
      include('view/article.php');
      include('view/footer.php');
    }elseif($user->getAdmin() == True){
      include('view/headerAdmin.php');
      include('view/articleConnecte.php');
      include('view/footerAdmin.php');
    }else{
      include('view/headerConnecte.php');
      include('view/articleConnecte.php');
      include('view/footerAdmin.php');
    }
    $html= ob_end_flush();
    return $html;
  }

  public function connexionController(){
      ob_start();
      include('view/connexion.php');
      $html= ob_end_flush();
      return $html;
  }

  public function inscriptionController(){
      ob_start();
      include('view/inscription.php');
      $html= ob_end_flush();
      return $html;
  }

  public function commentController(){
      ob_start();
      $userRepo = new UserRepository();
      $user = $userRepo->getLoggedUser();
      $commentRepo=new CommentRepository();
      $comments=$commentRepo->findAllById($user);

      include('view/headerConnecte.php');
      include('view/commentConnecte.php');
      include('view/footerAdmin.php');
      $html= ob_end_flush();
      return $html;
  }

  public function articleAdmin(){
    ob_start();
    $articleRepo=new ArticleRepository();
    $articles=$articleRepo->findAll('Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    if(!empty($_SESSION)){
      include('view/headerAdmin.php');
      include('view/articleAdmin.php');
      include('view/footerAdmin.php');
    }else{
      echo "vous n'êtes pas connecter";
    }
    $html= ob_end_flush();
    return $html;
  }

  public function commentAdmin(){
    ob_start();
    $commentRepo=new CommentRepository();
    $comments=$commentRepo->findAllBySignale();
    if(!empty($_SESSION)){
      include('view/headerAdmin.php');
      include('view/commentAdmin.php');
      include('view/footerAdmin.php');
    }else{
      echo "vous n'êtes pas connecter";
    }
    $html= ob_end_flush();
    return $html;
  }

  public function articleAdd(){
      ob_start();
      if(!empty($_SESSION)){
        include('view/headerAdmin.php');
        include('view/articleAdd.php');
        include('view/footerAdmin.php');
      }else{
        echo "vous n'êtes pas connecter";
      }
      $html= ob_end_flush();
      return $html;
  }

  public function modifierArticle($id){
      ob_start();
      $articleRepo=new ArticleRepository();
      $articles=$articleRepo->find($id, 'Article');
      if(!empty($_SESSION)){
        include('view/headerAdmin.php');
        include('view/modifierArticle.php');
        include('view/footerAdmin.php');
      }else{
        echo "vous n'êtes pas connecter";
      }
      $html= ob_end_flush();
      return $html;
  }


  public function errorController(){
    ob_start();
    include('view/error.php');
    $html= ob_end_flush();
    return $html;
  }

}
