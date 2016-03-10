<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    /**
     * @var 单例的关联
     */
    private static $instance;

    /**
     * 获取实例通过懒初始化(第一次使用建立)
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance=new static();
        }
        return static::$instance;
    }

    /**
     * 不允许在外面调用 :私有的！
     */
    private function __construct()
    {
    }
    /**
     * 防止实例被克隆
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final public function __clone()
    {
        throw new SingletonPatternViolationException('This is a Singleton. Clone is forbidden');
    }

    /**
     * 防止被反序列化
     */
    final public function __wakeUp()
    {
        throw new SingletonPatternViolationException('This is a Singleton. __wakeup usage is forbidden');
    }

}
