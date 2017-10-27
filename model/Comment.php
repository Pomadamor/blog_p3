<?php

class Comment{
  protected $id;
  protected $author;
  protected $content;
  protected $resume;
  protected $dateCreation;

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id=$id;
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
    return $this->dateCreation;
  }

  public function setDateCreation($dateCreation){
      $this->dateCreation=$dateCreation;
  }
}
