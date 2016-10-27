<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $page = 1;
        $limit = 7;
        $offset = ($page - 1) * $limit;

        $user = new Application_Model_User();
        $data_user = $user->getAll($limit,$offset);

        $paginator = Zend_Paginator::factory($data_user);
        $paginator->setItemCountPerPage(3);
        $paginator->setPageRange(3);
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
        $this->view->data=$paginator;
        echo "<pre>";
        print_r($data_user);
        echo "</pre>";

        //$this->view->assign('getdata',$data_user);

        //$this->view->data_user = $data_user;
    }


}

