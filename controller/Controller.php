<?php
class Controller{

  public function homeController(){
    ob_start();
    $articleRepo = new ArticleRepository();
    $articles    = $articleRepo->findAll('Article');
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    $userRepo    = new UserRepository();
    $user        = $userRepo->getLoggedUser();
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
    $html = ob_end_flush();
    return $html;
  }

    public function mentionController(){
      ob_start();
      $userRepo = new UserRepository();
      $user     = $userRepo->getLoggedUser();
      if($user === false){
        include('view/header.php');
        include('view/mentionlegale.php');
        include('view/footer.php');
      }elseif($user->getAdmin() == True){
        include('view/headerAdmin.php');
        include('view/mentionlegale.php');
        include('view/footerAdmin.php');
      }else{
        include('view/headerConnecte.php');
        include('view/mentionlegale.php');
        include('view/footerAdmin.php');
      }
      $html = ob_end_flush();
      return $html;
    }

  public function articleController($id){
    ob_start();
    $articleRepo = new ArticleRepository();
    $articles    = $articleRepo->find($id, 'Article');
    $articles->fetchCommentsAll();
    $userRepo    = new UserRepository();
    $user        = $userRepo->getLoggedUser();
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
    $html = ob_end_flush();
    return $html;
  }

  public function connexionController(){
      ob_start();
      include('view/connexion.php');
      $html = ob_end_flush();
      return $html;
  }

  public function inscriptionController(){
      ob_start();
      include('view/inscription.php');
      $html = ob_end_flush();
      return $html;
  }

  public function commentController(){
      ob_start();
      $userRepo    = new UserRepository();
      $user        = $userRepo->getLoggedUser();
      $commentRepo = new CommentRepository();
      $comments    = $commentRepo->findAllById($user);
      if( ($user !== false) && ($user->getAdmin() == True) ){
        include('view/headerConnecte.php');
        include('view/commentConnecte.php');
        include('view/footerAdmin.php');
      }
      $html = ob_end_flush();
      return $html;
  }

  public function articleAdmin(){
    ob_start();
    $articleRepo = new ArticleRepository();
    $articles    = $articleRepo->findAll('Article');
    $userRepo    = new UserRepository();
    $user        = $userRepo->getLoggedUser();
    foreach ($articles as $article) {
      $article->fetchComments();
    }
    if($user !== false){
      include('view/headerAdmin.php');
      include('view/articleAdmin.php');
      include('view/footerAdmin.php');
    }else{
      echo "vous n'êtes pas connecter";
    }
    $html = ob_end_flush();
    return $html;
  }

  public function commentAdmin(){
    ob_start();
    $commentRepo = new CommentRepository();
    $comments    = $commentRepo->findAllBySignale();
    $userRepo    = new UserRepository();
    $user        = $userRepo->getLoggedUser();
    if( ($user !== false) && ($user->getAdmin() == True) ){
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
      $userRepo = new UserRepository();
      $user     = $userRepo->getLoggedUser();
      if( ($user !== false) && ($user->getAdmin() == True) ){
        include('view/headerAdmin.php');
        include('view/articleAdd.php');
        include('view/footerAdmin.php');
      }else{
        echo "vous n'êtes pas connecter";
      }
      $html= ob_end_flush();
      return $html;
  }

  public function modifierArticle(){
      ob_start();
      $userRepo = new UserRepository();
      $user     = $userRepo->getLoggedUser();
      if( ($user !== false) && ($user->getAdmin() == True) ){
        $id=$_POST['id'];
        $articleRepo=new ArticleRepository();
        $articles=$articleRepo->find($id, 'Article');
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
