<?php

namespace App;

class SessionManager {
    public static function put($variable, $value)
    {
        $_SESSION[$variable] = serialize($value);
    }

    public static function get($value)
    {
        
    }

    public static function remove($value)
    {
        # code...
    }
}