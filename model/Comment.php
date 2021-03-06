<?php

class Comment{
  protected $id;
  protected $author;
  protected $content;
  protected $dateCreation;
  protected $signaler;
  protected $id_article;
  protected $id_user;

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id=$id;
  }

  public function getAuthor(){
    return $this->author;
  }

  public function setAuthor($author){
    $this->author=$author;
  }

  public function getContent(){
    return $this->content;
  }

  public function setContent($content){
    $this->content=$content;
  }
  public function getSignaler(){
    return $this->signaler;
  }

  public function setSignaler($signaler){
    $this->signaler=$signaler;
  }

  public function getDateCreation(){
    try {
        $date = new DateTime($this->dateCreation);
    } catch (Exception $e) {
        echo $e->getMessage();
        exit(1);
    }
    echo $date->format('d/m/Y');
  }

  public function setDateCreation($dateCreation){
      $this->dateCreation=$dateCreation;
  }

  public function getId_article(){
    return $this->id_article;
  }

  public function setId_article($id_article){
    $this->id_article=$id_article;
  }

  public function getId_user(){
    return $this->id_user;
  }

  public function setId_user($id_user){
    $this->id_user=$id_user;
  }
}
