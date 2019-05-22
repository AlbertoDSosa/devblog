<?php

namespace App\controllers;
use App\ViewManager;
use DI\Container;
use Kint;

abstract class Controller
{
    protected $viewManager;
    protected $container;

    public function __construct (Container $container)
    {
        $this->container = $container;
        $this->viewManager = $this->container->get(ViewManager::class);
    }

    abstract public function index();
}