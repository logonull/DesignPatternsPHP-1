<?php

namespace DesignPatterns\Structural\DependencyInjection;


/**
 * AbstractConfig 类
 */
abstract class AbstractConfig
{
    /**
     * @var 数据的存储
     */
    protected $storage;

    public function __construct($storage)
    {
        $this->storage=$storage;
    }
}