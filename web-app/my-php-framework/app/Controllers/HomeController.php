<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Load the home view
        require_once '../app/Views/home.php';
    }

    public function welcome()
    {
        require_once '../app/Views/welcome.php';
    }
}