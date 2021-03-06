<?php
// require_once('Comment.php');
// require_once('AbstractEntityRepository.php');
class CommentRepository extends AbstractEntityRepository{


  public function findCommentByArticle(Article $a){
    $req = $this -> db->prepare("SELECT * FROM Comment WHERE :id_article = id_article ORDER BY dateCreation DESC LIMIT 3;");
    $req -> bindValue(':id_article',$a->getId());
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $req -> execute();
    $datas = $req -> fetchAll();
    return $datas;
  }

  public function findCommentAllByArticle(Article $a){
    $req = $this -> db->prepare("SELECT * FROM Comment WHERE :id_article = id_article ORDER BY dateCreation DESC;");
    $req -> bindValue(':id_article',$a->getId());
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $req -> execute();
    $datas = $req -> fetchAll();
    return $datas;
  }

  public function findAllById($user){
    $req = $this -> db->prepare("SELECT * FROM Comment WHERE :id_user = id_user ORDER BY dateCreation DESC;");
    $req -> bindValue(':id_user',$user->getId());
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $req -> execute();
    $datas = $req -> fetchAll();

    return $datas;
  }

  public function findAllBySignale(){
    $req = $this -> db -> query('SELECT Comment.*, User.prenom as author FROM Comment INNER JOIN User WHERE User.id = Comment.id_user ORDER BY `signaler` DESC, dateCreation DESC');
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Comment');
    $req -> execute();
    $datas = $req -> fetchAll();
    return $datas;
  }


  public function signalActif($idComm){
    $resultat = $this -> db->prepare("UPDATE Comment
                            SET signaler = '1'
                            WHERE :idComm = `id`");
    $resultat->bindValue(':idComm',$idComm);
    $resultat->execute();
  }

  public function addComment(Comment $comment){
   $req = $this ->db->prepare('INSERT INTO Comment (id_article,id_user,content,dateCreation)VALUES(:id_article,:id_user,:content,NOW())');
   $req->bindValue(':id_article',$comment->getId_article());
   $req->bindValue(':id_user',$comment->getId_user());
   $req->bindValue(':content',$comment->getContent());
   $result = $req->execute();
   if($result){
     header("Location:index.php");
   }else echo "erreur de la base";
 }

  public function commentOk($id){
    $resultat = $this -> db->prepare("UPDATE Comment
                            SET signaler = '0'
                            WHERE :id = `id`");
    $resultat->bindValue(':id',$id);
    $resultat->execute();
  }

  public function commentSup($id){
    $resultat = $this -> db->prepare("DELETE FROM Comment
                            WHERE :id = `id`");
    $resultat->bindValue(':id',$id);
    $resultat->execute();
  }

}
