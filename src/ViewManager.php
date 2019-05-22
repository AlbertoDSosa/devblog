<?php

namespace App;

use Kint;
use Twig;

class ViewManager
{
    protected $twig;
    protected $logger;

    public function __construct ()
    {
        $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__).'/views');
        $this->twig = new \Twig\Environment($loader);
    }

    public function render ($view, $args=[]){
        if($args !=null) {
            extract($args, EXTR_SKIP);
        }

        $file = dirname(__DIR__).'/views/'. $view;

        if(is_readable($file)) {
            require $file;
        } else {
            throw new \InvalidArgumentException();
        }

    }

    public function renderTemplate ($template, $args=[]) {
        static $twig = null;

        if($twig === null) {
            $loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/views');
            $twig = new \Twig_Environment($loader);
        }

        // Kint::dump($twig->render($template, $args));
        echo $twig->render($template, $args);
    }
}