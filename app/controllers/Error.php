<?php

class ErrorController extends \Yaf_Controller_Abstract
{
    public function errorAction($exception)
    {
        switch ($exception->getCode()) {
            case YAF_ERR_NOTFOUND_MODULE:
            case YAF_ERR_NOTFOUND_CONTROLLER:
            case YAF_ERR_NOTFOUND_ACTION:
            case YAF_ERR_NOTFOUND_VIEW:
                header('HTTP/1.1 404 Not Found');
                $this->_view->error = 'Page was not found';
                break;
            default :
                header('HTTP/1.1 500 Internal Server Error');
                $this->_view->error = 'Application Error';
                break;
        }
    }
}
