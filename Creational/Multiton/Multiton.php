<?php

namespace DesignPatterns\Creational\Multiton;

class Multion
{
    /**
     * 第一个实例
     */
    const INSTANCE_1 = '1';

    /**
     * 第二个实例
     */
    const INSTANCE_2 = '2';

    /**
     * 保存已经被命名过的实例
     */
    private static $instance = [];

    /**
     * 不能被外部实例:私有的！
     */
    private function __construct()
    {
    }

    /**
     * 获取给定名称的实例
     * 懒实例化（后期静态绑定）
     * @param $instanceName
     * @return mixed
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName,self::$instance)) {
            self::$instance[$instanceName] = new self();
        }
        return self::$instance[$instanceName];
    }

    /**
     * prevent instance from being cloned.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
