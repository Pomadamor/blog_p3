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
    if(!empty($_SESSION)){
      include('view/headerAdmin.php');
      include('view/home.php');
      include('view/footerAdmin.php');
    }else{
      include('view/header.php');
      include('view/home.php');
      include('view/footer.php');      
    }
    $html= ob_end_flush();
    return $html;
  }

  public function articleController($id){
    ob_start();
    $articleRepo=new ArticleRepository();
    // $articles=$articleRepo->findAll($id, table: 'Article');
    $articles=$articleRepo->find($id, 'Article');
    $articles->fetchCommentsAll();
    include('view/article.php');
    $html= ob_end_flush();
    return $html;
  }

  public function connexionController(){
      ob_start();
      include('view/connexion.php');
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
