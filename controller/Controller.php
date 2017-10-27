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
    include('view/home.php');
    $html= ob_end_flush();
    return $html;
  }

  public function articleController($id){
    ob_start();
    $articleRepo=new ArticleRepository();
    // $articles=$articleRepo->findAll($id, table: 'Article');
    $articles=$articleRepo->find($id, 'Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    var_dump( $articles );
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
