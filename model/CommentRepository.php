<?php
require_once('Comment.php');
require_once('AbstractEntityRepository.php');
class CommentRepository extends AbstractEntityRepository{


  public function findCommentByArticle(Article $a){
    $req = $this -> db->query("SELECT * FROM Comment WHERE id_article =".$a->getId()." ORDER BY dateCreation DESC LIMIT 3;");
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $datas = $req -> fetchAll();
    return $datas;
  }

  public function findCommentAllByArticle(Article $a){
    $req = $this -> db->query("SELECT * FROM Comment WHERE id_article =".$a->getId()." ORDER BY dateCreation DESC;");
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $datas = $req -> fetchAll();
    return $datas;
  }

  public function signalActif($idComm){
    $resultat = $this -> db->query("UPDATE Comment
                            SET signaler = '1'
                            WHERE ".$idComm." = `id`");
    $resultat->execute();
  }

  public function addComment(Comment $comment){
   $req = $this ->db->prepare('INSERT INTO comment (author,title,content,resume,dateCreation)VALUES(:author,:title,:content,:resume,NOW())');
   $req->bindValue(':author',$comment->getAuthor());
   $req->bindValue(':title',$comment->getTitle());
   $req->bindValue(':content',$comment->getContent());
   $req->bindValue(':resume',$comment->getResume());
   $req->execute();
  }

}
