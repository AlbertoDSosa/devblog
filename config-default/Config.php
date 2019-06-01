<?php
namespace App;

class Config
{
    public static function getConfig() {
        return [
            'database'=>[
              'name'=>'database_name',
              'username'=>'root',
              'password'=>'my_secret_pw',
              'connection'=>'mysql:host=127.0.0.1'
            ]
        ];
    }
}