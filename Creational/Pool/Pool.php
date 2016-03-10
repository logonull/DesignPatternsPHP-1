<?php

namespace DesignPatterns\Creational\Pool;

class Pool
{
    private $instance = array();
    private $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function get()
    {
        if (count($this->instance) > 0) {
            return array_pop($this->instance);
        }
        return new $this->class();
    }
    public function dispose($instance)
    {
        $this->instance[] = $instance;
    }
}
