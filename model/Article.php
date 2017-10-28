<?php
require('model/CommentRepository.php');

class Article{
  protected $id;
  protected $author;
  protected $title;
  protected $content;
  protected $resume;
  protected $dateCreation;
  protected $comments;

  public $donnees=[];

  public function fetchComments() {
    $comments= new CommentRepository();
    $this->comments= $comments->findCommentByArticle($this);
  }

  public function fetchCommentsAll() {
    $comments= new CommentRepository();
    $this->comments= $comments->findCommentAllByArticle($this);
  }

  public function getComments(){
    return $this->comments;
  }


  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id=$id;
  }

  public function getAuthor(){
    return $this-> author;
  }

  public function setAuthor($author){
    $this->author=$author;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setTitle($title){
    $this->title=$title;
  }

  public function getContent(){
    return $this->content;
  }

  public function setContent($content){
    $this->content=$content;
  }
  public function getResume(){
    return $this->resume;
  }

  public function setResume(){
    $resume=substr($this->getContent(), 0, 200);
    return $resume.'...';
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
}
