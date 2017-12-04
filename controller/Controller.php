<?php
class Controller{

  public function homeController($params = null)
  {
    $articleRepo = new ArticleRepository();
    $articles    = $articleRepo->findAll('Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    $view = new View('home');
    $view->render(array('articles' => $articles));
  }

  public function mentionController($params = null){
    $view = new View('mentionlegale');
    $view->render(array());
  }

  public function articleController($params){
    // var_dump($params);
    $articleRepo = new ArticleRepository();
    $id          = $params['article'];
    $articles    = $articleRepo->find($id, 'Article');
    $articles->fetchCommentsAll();
    // var_dump($articles);
    $view = new View('article');
    $view->render(array('articles' => $articles));
  }

  public function connexionController($params = null){
    $view = new View('connexion');
    $view->render(array());
  }

  public function inscriptionController($params = null){
    $view = new View('inscription');
    $view->render(array());
  }

  public function commentController(){
    $userRepo    = new UserRepository();
    $user  = $userRepo->getLoggedUser();
    $commentRepo = new CommentRepository();
    $comments    = $commentRepo->findAllById($user);
    $view = new View('comment');
    $view->render(array('comments' => $comments));
  }

  public function articleAdmin(){
    $articleRepo = new ArticleRepository();
    $articles    = $articleRepo->findAll('Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    $view = new View('articles');
    $view->render(array('articles' => $articles));
  }

  public function commentAdmin(){
    $commentRepo = new CommentRepository();
    $comments    = $commentRepo->findAllBySignale();
    $view = new View('comment');
    $view->render(array('comments' => $comments));
  }

  public function articleAdd(){
    $view = new View('articleAdd');
    $view->render(array());
  }

  public function modifierArticle($params){
    $id=$params['id'];
    $articleRepo=new ArticleRepository();
    $articles=$articleRepo->find($id, 'Article');
    $view = new View('modifierArticle');
    $view->render(array('articles' => $articles));
  }

  public function errorController($params = null){
    $view = new View('error');
    $view->render(array());
  }

}
