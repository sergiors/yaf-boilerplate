<?php

class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->_view->world = 'hello world';
    }
}
