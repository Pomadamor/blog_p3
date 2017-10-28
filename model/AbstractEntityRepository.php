<?php

class AbstractEntityRepository{

  protected $db;

  public function __construct(){
    $this->db=DatabaseConnexion::getDatabaseConnect();
  }

  public function findAll($table){
    $req = $this -> db -> query('SELECT * FROM '.$table.' ORDER BY dateCreation DESC');
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $table);
    $datas = $req -> fetchAll();
    return $datas;
  }

  public function find($id, $table){
    $req = $this -> db -> query('SELECT * FROM '.$table.' WHERE id='.$id);
    $req->execute();
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $table);
    $datas = $req -> fetch();
    return $datas;
  }
}
