<?php

namespace DesignPatterns\Structural\Facade;

/**
 *
 */
class Facade
{
    /**
     * @var OsInterface
     */
    protected $os;

    /**
     * @var BiosInterface
     */
    protected $bios;

    /**
     * 这是一个非常好的地方使用依赖注入容器去产生这个类的实例。
     * @param BiosInterface $bios
     * @param OsInterface   $os
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     *  打开系统.
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * 关闭系统.
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
