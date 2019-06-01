<?php

namespace App\controllers;

use App\dao\RegisterDao;
use Tamtamchik\SimpleFlash\Flash;

class LoginController extends Controller
{
    private $message;
    
    public function index()
    { 
        $this->viewManager->renderTemplate("login.view.html");
    }

    public function login()
    {

        $email = $_POST['email'];
        $password = $_POST['passwd'];

        $this->logger->info($email.' '. $password);
        
        $this->redirect('');
    }
}