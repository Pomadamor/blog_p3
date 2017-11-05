<?php
require_once("model/ArticleRepository.php");

class ControllerArticle{
  public static function articleAddAdmin() {
      $titre=htmlspecialchars($_POST['titre']);
      $content=$_POST['content'];

      if ((!empty($titre))&&(!empty($content))){
        $article = new Article();
        $article -> setAuthor('Jean Forteroche');
        $article -> setTitle($titre);
        $article -> setContent($content);
        $article -> setResume();

        $articleAdd = new ArticleRepository();
        $addArtile = $articleAdd -> add($article);
        header("Location:index.php");
      }
  }

  public static function modifierArticle() {
    $titre=htmlspecialchars($_POST['titre']);
    $content=htmlspecialchars($_POST['content']);
    $id=htmlspecialchars($_POST['id']);

    if ((!empty($titre))&&(!empty($content))&&(!empty($id))){
      $article = new Article();
      $article -> setAuthor('Jean Forteroche');
      $article -> setTitle($titre);
      $article -> setContent($content);
      $article -> setResume();
      $article -> setId($id);

      $articleModif = new ArticleRepository();
      $modifArticle = $articleModif -> articleModifier($article);
      header("Location:index.php?articleAdmin");
    }
  }

  public static function supprimerArticle() {
    $id= htmlspecialchars($_POST['id']);

    if (!empty($id)){

      $suppAc = new ArticleRepository();
      $suppEf =$suppAc -> articleSup($id);
      header("Location:index.php?articleAdmin");
    }
  }

}
