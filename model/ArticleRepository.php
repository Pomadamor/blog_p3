<?php

// require('AbstractEntityRepository.php');

class ArticleRepository extends AbstractEntityRepository{

  public function add(Article $article){
   $req = $this ->db->prepare('INSERT INTO article (author,title,content,resume,dateCreation)VALUES(:author,:title,:content,:resume,NOW())');
   $req->bindValue(':author',$article->getAuthor());
   $req->bindValue(':title',$article->getTitle());
   $req->bindValue(':content',$article->getContent());
   $req->bindValue(':resume',$article->getResume());
   $req->execute();
  }

}
