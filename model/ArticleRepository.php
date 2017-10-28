<?php

// require('AbstractEntityRepository.php');

class ArticleRepository extends AbstractEntityRepository{

  public function add(Article $article){
   $req = $this ->db->prepare('INSERT INTO Article (author,title,content,resume,dateCreation)VALUES(:author,:title,:content,:resume,NOW())');
   $req->bindValue(':author',$article->getAuthor());
   $req->bindValue(':title',$article->getTitle());
   $req->bindValue(':content',$article->getContent());
   $req->bindValue(':resume',$article->getResume());
   $result = $req->execute();
   if($result){
     header("Location:index.php");
   }else echo "erreur de la base";
  }

  public function articleSup($id){
    $resultat = $this -> db->query("DELETE FROM Article
                            WHERE ".$id." = `id`");
    $resultat->execute();
  }

}
