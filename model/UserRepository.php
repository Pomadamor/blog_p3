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
      $resultat->bindValue(':sid',$_SESSION['user_id']);
      $resultat = $requete->execute();
      $requete->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
      $user = $requete -> fetch();
      return $user;
    }else return false;
  }

  public function logUser($login, $password){
    if( !empty( $login ) && !empty( $password ) ) {
      $requete = $this -> db->prepare(
      'SELECT *
       FROM User
       WHERE mail = :login AND mdp = :password' );
      $resultat->bindValue(':login',$login);
      $resultat->bindValue(':password',$password);
      $resultat = $requete->execute();
      $requete->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
      $user = $requete -> fetch();
      if($user !== false){
        $_SESSION['user_id'] = $user->getId();
        return True;
      }else return false;
    }else return false;
  }

  public function add(User $user){
   $req = $this ->db->prepare('INSERT INTO user (mail,prenom,mdp)VALUES(:mail,:prenom,:mdp)');
   $req->bindValue(':mail',$user->getMail());
   $req->bindValue(':prenom',$user->getPrenom());
   $req->bindValue(':mdp',$user->getMdp());
   $req->execute();
  }

}
