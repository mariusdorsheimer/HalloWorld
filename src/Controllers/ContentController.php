<?php

namespace HelloWorld\Controllers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;



class ContentController extends Controller {

    use Loggable;

    public function sayHello(Twig $twig, ConfigRepository $repository) {

        $this->getLogger('test')->error('test', $repository->get('HelloWorld.testkey'));

        return $twig->render('HelloWorld::content.helloWorld');
    }
}