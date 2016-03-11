<?php

namespace DesignPatterns\Structural\Registry;

/**
 * Registry类
 */
abstract class Registry
{
    const LOGGER='logger';

    protected static $storedValues=array();

    /**
     * 设置值
     * @param string $key
     * @static
     * @param string $value
     */
    public static function set($key,$value)
    {
        self::$storedValues[$key]=$value;
    }

    /**
     * 从注册树上获取一个值
     * @param $key
     * @static
     * @return mixed
     */
    public static function get($key)
    {
        return self::$storedValues[$key];
    }

    //这些方法会检查 是否一个key已经被注册等等


}