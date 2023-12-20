<?php

class Router {
    private $routes = [];

    public function addRoute($url, $controller) {
        $this->routes[$url] = $controller;
    }

    public function route($url) {
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        } else {
            return ['TodoController', 'error404'];
        }
    }
}
