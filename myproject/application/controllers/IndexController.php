<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {


       	// 如果这里不写，就相当于有这句代码
        $this->render('index');
    }


}

