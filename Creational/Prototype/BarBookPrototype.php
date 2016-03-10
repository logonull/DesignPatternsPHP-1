<?php

namespace DesignPatterns\Creational\Prototype;

class BarBooKPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {

    }
}