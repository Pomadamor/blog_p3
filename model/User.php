<?php
  // require("controller/ControllerVerif.php");
  // require('model/DatabaseConnexion.php');

  class User{

    private $_id;
    private $_mail;
    private $_mdp;
    private $_prenom;
    private $_admin;


    public function getMail(){
      return $this->mail;
    }

    public function setMail($mail){
      $this->mail=$mail;
    }
    public function getPrenom(){
      return $this->prenom;
    }

    public function setPrenom($prenom){
      $this->prenom=$prenom;
    }
    public function getMdp(){
      return $this->mdp;
    }

    public function setMdp($mdp){
      $this->mdp=$mdp;
    }
    public function getId(){
      return $this->id;
    }

    public function setId($id){
      $this->id=$id;
    }

    public function getAdmin(){
      return $this->admin;
    }

    public function setAdmin($admin){
      $this->admin=$admin;
    }

	}
