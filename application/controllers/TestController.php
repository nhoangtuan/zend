<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        echo 1;
    }
    public function chatAction(){
      $this->view->assign('data','Lopopopop');
      //echo "John";
    }


}

