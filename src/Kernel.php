<?php

namespace App;

use Kint;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use App\controllers\HomeController;
use DI\ContainerBuilder;

class Kernel
{
    private $logger;
    private $container;

    public function __construct(){
        $this->container = $this->createContainer();
    }

    public function init()
    {
        $this->logger = new Logger('Kernel');
        $this->logger->pushHandler (new StreamHandler(dirname(__DIR__).'/var/log/dev.log'));
        $this->logger->info("Arrancado Kernel");
        $homeController = new HomeController($this->container); 
        $homeController->index();
    }

    public function createContainer()
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);

        return $containerBuilder->build();
    }
}
