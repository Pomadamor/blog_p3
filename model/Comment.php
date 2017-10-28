<?php

class Comment{
  protected $id;
  protected $author;
  protected $content;
  protected $dateCreation;
  protected $signaler;

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
  public function getSignaler(){
    return $this->signaler;
  }

  public function setSignaler($signaler){
    $this->signaler=$signaler;
  }

  public function getDateCreation(){
    return $this->dateCreation;
  }

  public function setDateCreation($dateCreation){
      $this->dateCreation=$dateCreation;
  }
}
