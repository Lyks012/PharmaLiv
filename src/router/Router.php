<?php

namespace App\Router;

class Router
{
    private $url;
    private $routes = [];
    private $namedRoutes = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function add($path, $callable, $name, $method)
    {
        if(is_string($callable) && $name === null){
            $name = $callable;
        }

        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;
        if($name)
        {
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }

    public function get($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'GET');
    }

    public function post($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'POST');
    }

    public function run()
    {
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']]))
        {
            throw new RouterException("Request method does not exist");
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
        {
            if($route->match($this->url))
            {
                return $route->call();
            }
        }
        throw new RouterException("No matching route");
    }

    public function url($name, $params = [])
    {
        if(!isset($this->namedRoutes[$name]))
        {
            throw new RouterException("No route matches this name.");
        }
        return $this->namedRoutes[$name]->getUrl($params);
    }
}