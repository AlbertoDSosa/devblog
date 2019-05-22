<?php

namespace App;

// use Kint;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Kernel
{
    public function __construct(){
        $prueba = "Hola Mundo";
        // Kint::dump($prueba);
        echo $prueba;
        $this->logger = new Logger('Kernel');
        $this->logger->pushHandler (new StreamHandler(dirname(__DIR__).'/var/log/dev.log'));
        $this->logger->info("Arrancado Kernel");
    }
}
