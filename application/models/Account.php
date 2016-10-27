<?php

class Application_Model_Account extends Zend_Db_Table_Abstract {
  protected $_name = "account";
  protected $_primary = "id";
  //protected $db;

  // public function __construct($config = array()){
  //   $this->db = Zend_Registry::get('db');
  //   parent::__construct($config);
  // }
  public function listAll(){
    return $this->fetchAll()->toArray();
  }
  public function findPrimaykey($id){
    // echo $id;die;
    return $this->fetchRow($this->select()->where('id = ?',$id));
  }
}

