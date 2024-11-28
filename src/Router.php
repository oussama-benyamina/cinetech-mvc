<?php
namespace App;

class Router {
    private $routes = [];
    private $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function add($url, $controller, $action) {
        $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([^/]+)', $url);
        $pattern = str_replace('/', '\/', $pattern);
        $pattern = '/^' . $pattern . '$/';
        
        $this->routes[$pattern] = [
            'controller' => $controller,
            'action' => $action,
            'original' => $url
        ];
    }

    public function dispatch($url) {
        foreach ($this->routes as $pattern => $route) {
            if (preg_match($pattern, $url, $matches)) {
                $controllerClass = $route['controller'];
                $action = $route['action'];
                
                array_shift($matches);
                
                $controller = $this->container->get($controllerClass);
                
                if (!empty($matches)) {
                    call_user_func_array([$controller, $action], $matches);
                } else {
                    $controller->$action();
                }
                return;
            }
        }
        throw new \Exception("No route found for URL: $url");
    }
}