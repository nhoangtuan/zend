<?php

class Application_Model_User{
  protected $db;
  public function __construct(){
    $this->db = Zend_Registry::get('db');
  }
  public function getAll($limit , $offset){

    $sql = $this->db->prepare('select * from user limit '.$limit.' offset '.$offset);
    $sql->execute();
    $res = $sql->fetchAll();
    $sql->closeCursor();
    $db = $sql = null;
    return $res;
  }
}

