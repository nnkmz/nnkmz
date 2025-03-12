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

    public function resolve()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$requestMethod][$uri])) {
            $handler = $this->routes[$requestMethod][$uri];
            if (is_array($handler)) {
                $controller = new $handler[0]();
                $method = $handler[1];
                return $controller->$method();
            }
            return $handler();
        }

        throw new \Exception("No route defined for this URI.");
    }
}