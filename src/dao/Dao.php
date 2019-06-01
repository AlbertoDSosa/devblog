<?php
namespace App\dao;
use App\Config;
use App\MySqlManager;
use App\LoggerManager;
use DI\Container;
use Kint;


abstract class Dao
{
    protected $container;
    protected $pdo;
    protected $logger;


    public function __construct(Container $container)
    {
        $this->container = $container;
        $mysqlManager = $this->container->get(MySqlManager::class);
        $this->pdo = $mysqlManager->make(Config::getConfig()['database']);
        $this->logger = $this->container->get(LoggerManager::class);  
        $this->logger->info ( get_class($this).' cargado');
    }
}