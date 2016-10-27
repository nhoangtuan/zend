<?php

class AccountController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        // $account = new Application_Model_Account();
        // $this->view->listAccounts = $account->fetchAll(Zend_db::FETCH_OBJ);
        $account = new Application_Model_Account();
        $dataAccount = $account->listAll();
        echo "<pre>";
        print_r($dataAccount);
        echo "</pre>";
        $this->view->listAccounts = $dataAccount;
    }
    public function addAction(){

    }
    public function processAction(){
      $account = new Application_Model_Account();
      $dataAccount = $account->insert(array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ));
      $this->redirect('account/index');
    }
    public function deleteAction(){
      $account = new Application_Model_Account();
      $de = $account->findPrimaykey($this->getParam('id'));
      $de->delete();
      $this->redirect('account/index');
    }
    public function editAction(){
       $account = new Application_Model_Account();
       $this->view->account = $account->findPrimaykey($this->getParam('id'));
    }
    public function processeditAction(){
      $account = new Application_Model_Account();
      $edit = $account->findPrimaykey($this->getParam('id'));
      if(!empty($_POST['password']))
        $edit->password = $_POST['password'];
      $edit->save();
      $this->redirect('account/index');
    }

}

