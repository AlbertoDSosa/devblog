<?php
namespace App;
use DI\Container;

class MySqlManager
{
    private $container;
    private  $logger;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->logger = $this->container->get(LoggerManager::class);  
        $this->logger->info ( get_class($this).' cargado');
    }

    public function make($config)
    {
        try{
            return new \PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password']
            );
        }catch( \PDOException $ex){
           $this->logger->warning($ex->getMessage());
        }
    }
}
