<?php

namespace App;

use Kint;
use DI\ContainerBuilder;
use App\interfaces\LoggerInterface;
use App\routing\Web;

class Kernel
{
    private $logger;
    private $container;

    public function __construct(){
        $this->container = $this->createContainer();
        $this->logger = new LoggerManager();
        $this->container->set(LoggerInterface::class, $this->logger);
    }

    public function init()
    {
        $this->logger->info("Arrancado Kernel");

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        $route = $this->container->get(RoutingManager::class);
        $route->dispatch($httpMethod, $uri, Web::getDispatcher());
    }

    public function createContainer()
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);

        return $containerBuilder->build();
    }
}
