<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * 装饰器必须实现RendererInterface规约，这是这个设计模式的核心特性.如果没有，这就不是一个装饰器而仅仅是一个沉默的包装者
 */

/**
 *  Decorator类
 */
abstract class Decorator implements RendererInterface
{
    /**
     * @var RendererInterface
     */
    protected $wrapped;

    /**
     * 你必须类型提示包裹的组件
     * 它确认你能调用renderData()方法在你的子类里.
     * @param RendererInterface $wrappable
     */
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}
