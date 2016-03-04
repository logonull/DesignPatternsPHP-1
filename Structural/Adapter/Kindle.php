<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Kindle是一个电子书的实现
 *
 */
class Kindle implements EBookInterFace
{
    /**
     * 下一页
     */
    public function pressNext(){}

    /**
     * 打开书
     */
    public function pressStart(){}
}