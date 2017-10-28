<?php
require_once("model/ArticleRepository.php");

class ControllerArticle{
  public static function articleAddAdmin() {
      if ((!empty($_POST['titre']))&&(!empty($_POST['content']))){
        $article = new Article();
        $article -> setAuthor('Jean Forteroche');
        $article -> setTitle($_POST['titre']);
        $article -> setContent($_POST['content']);
        $article -> setResume();

        $articleAdd = new ArticleRepository();
        $addArtile = $articleAdd -> add($article);
        header("Location:index.php");
      }
  }

  public static function modifierArticle() {

  }

  public static function supprimerArticle() {
    if (!empty($_POST['id'])){
      $id= $_POST['id'];

      $suppAc = new ArticleRepository();
      $suppEf =$suppAc -> articleSup($id);
      header("Location:index.php");
    }
  }

}
