<?php

class UsersController extends BaseController
{
    public function indexAction()
    {
        $this->_view->users = [
            ['name' => 'Paul Stanley'],
            ['name' => 'Tony Iommi'],
        ];
    }
}
