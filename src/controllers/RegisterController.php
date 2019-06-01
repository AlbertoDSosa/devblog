<?php

namespace App\controllers;
use App\dao\RegisterDao;
use Tamtamchik\SimpleFlash\Flash;

class RegisterController extends Controller
{
    private $message;
    
    public function index()
    { 
        $this->viewManager->renderTemplate("register.view.html");
    }

    public function register()
    {

        $email = $_POST['email'];
        $password = $_POST['passwd'];


        $this->logger->info($email.' '. $password);
        
        $registerDao = new RegisterDao($this->container);
        $registerDao->find($email);

        // $registerDao->save($email, $password);
        // $this->redirect('');
    }
}