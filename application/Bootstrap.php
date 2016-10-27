<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
  protected function _initDatabase(){
    $db = $this->getPluginResource('db')->getDbAdapter();
    Zend_Registry::set('db',$db);
  }
  protected function _initAutoLoad(){
    $moduleLoader = new Zend_Application_Module_AutoLoader( array (
        'namespace' => '',
        'basePath' => APPLICATION_PATH
      ) );
    return $moduleLoader;
  }
}

