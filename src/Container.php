<?php
namespace App;

class Container {
    private $services = [];

    public function set($name, $callback) {
        $this->services[$name] = $callback;
    }

    public function get($name) {
        if (!isset($this->services[$name])) {
            throw new \Exception("Service not found: $name");
        }
        return $this->services[$name]($this);
    }
}