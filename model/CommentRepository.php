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
   $req = $this ->db->prepare('INSERT INTO Comment (id_article,author,content,dateCreation)VALUES(:id_article,:author,:content,NOW())');
   $req->bindValue(':id_article',$comment->getId_article());
   $req->bindValue(':author',$comment->getAuthor());
   $req->bindValue(':content',$comment->getContent());
   $result = $req->execute();
var_dump($result);
exit;
   if($result){
     header("Location:index.php");
   }else echo "erreur de la base";
 }

}
