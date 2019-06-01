<?php

namespace App\controllers;
use App\ViewManager;
use App\LoggerManager;
use DI\Container;
use Kint;

abstract class Controller
{
    protected $viewManager;
    protected $container;
    protected $logger;

    public function __construct (Container $container)
    {
        $this->container = $container;
        $this->viewManager = $this->container->get(ViewManager::class);
        $this->logger = $this->container->get(LoggerManager::class);  
        $this->logger->info ( get_class($this).' cargado');
    }

    abstract public function index();

    public function redirect($page)
    {
        $host=$_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF'],'/\\'));
        header("Location: http://$host$uri/$page");
    }
}