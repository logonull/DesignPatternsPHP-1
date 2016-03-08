<?php

namespace DesignPatterns\Structural\Facade;

/**
 *  BiosInterface类
 */
interface BiosInterface
{
    /**
     * 启动 BIOS.
     */
    public function execute();

    /**
     * 等待暂停 halt.
     */
    public function waitForKeyPress();

    /**
     * 启动 OS.
     *
     * @param OsInterface $os
     */
    public function launch(OsInterface $os);

    /**
     * 关掉 BIOS.
     */
    public function powerDown();
}
