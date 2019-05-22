<?php

namespace App\controllers;

use Kint;

class HomeController extends Controller 
{
    public function index()
    {
        $this->viewManager->renderTemplate("home.view.html");
    }
}