<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * record类
 */
class Record
{
    /**
     * @var array|null
     */
    protected $data;

    /**
     * @param null $data
     */
    public function __construct($data = null)
    {
        $this->data = (array) $data;
    }

    /**
     * 魔术方法 setter
     * @param $name
     * @param $value
     */
    public function __set($name,$value)
    {
        $this->data[(string) $name] = $value;
    }

    /**
     * 魔术方法 getter
     * @param string $name
     * @param mixed|null
     */
    public function __get($name)
    {
        if (array_key_exists($name,$this->data)) {
            return $this->data[(string) $name];
        } else {
            return ;
        }
    }
}