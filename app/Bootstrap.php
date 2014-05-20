<?php

use Suin\Yaf\Twig\Twig;

class Bootstrap extends \Yaf_Bootstrap_Abstract
{
  public function _initConfig(\Yaf_Dispatcher $dispatcher)
  {
    $this->config = Yaf_Application::app()->getConfig();
  }

  public function _initTwig(\Yaf_Dispatcher $dispatcher)
  {
    $twig = new Twig(APP_PATH . '/app/views', [
      'cache' => APP_PATH . '/cache',
      'debug' => $this->config->twig->debug
    ]);

    $dispatcher->setView($twig);
  }
}
