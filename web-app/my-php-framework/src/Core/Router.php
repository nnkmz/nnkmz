<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function resolve($uri, $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            return $this->routes[$requestMethod][$uri];
        }

        throw new \Exception("No route defined for this URI.");
    }
}