<?php

namespace DesignPatterns\Creational\Pool;

class Worker
{
    public function __construct()
    {
        //我们说构造器真正做事
        //比如创建一个线程
    }
    public function run($image,array $callback)
    {
        //做一些事情和$image
        //当做完之后，回调
        call_user_func($callback,$this);
    }
}

