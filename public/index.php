<?php
//Start Session
if(!session_id() ) @session_start();

require_once dirname(__DIR__).'/vendor/autoload.php';

use App\Kernel;

$kernel = new Kernel();

$kernel->init();