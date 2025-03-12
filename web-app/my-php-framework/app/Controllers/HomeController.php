<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Load the home view
        require_once '../app/Views/home.php';
    }
}