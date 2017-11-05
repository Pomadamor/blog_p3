<?php

require('model/User.php');

class UserRepository extends AbstractEntityRepository{

  public function isConnected() {
    return boolval($this->_id);
  }

  public function getLoggedUser(){
    if ( isset( $_SESSION['user_id'] ) ) {
      $requete = $this -> db->prepare(
        'SELECT *
        FROM User
        WHERE User.id = :sid' );
      $requete->bindValue(':sid',$_SESSION['user_id']);
      $requete->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
      $resultat = $requete->execute();
      $user = $requete -> fetch();
      return $user;
    }else return false;
  }

  public function logUser($login, $password){
    if( !empty( $login ) && !empty( $password ) ) {
      $requete = $this -> db->prepare(
      'SELECT *
       FROM User
       WHERE mail = :login AND mdp = PASSWORD(:password)' );
      $requete->bindValue(':password',$password);
      $requete->bindValue(':login',$login);
      $req = $requete->execute();
      $requete->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
      $user = $requete -> fetch();
      if($user !== false){
        $_SESSION['user_id'] = $user->getId();
        return True;
      }else return false;
    }else return false;
  }

  public function add(User $user){
   $req = $this ->db->prepare('INSERT INTO User (mail,prenom,mdp)VALUES(:mail,:prenom,PASSWORD(:mdp))');
   $req->bindValue(':mail',$user->getMail());
   $req->bindValue(':prenom',$user->getPrenom());
   $req->bindValue(':mdp',$user->getMdp());
   $resultat = $req->execute();
   return $resultat;
  }

}
