<?php

namespace App\interfaces;

interface LoggerInterface
{
    public function info(string $message);
    public function warning(string $message);
    public function error(string $message);
}