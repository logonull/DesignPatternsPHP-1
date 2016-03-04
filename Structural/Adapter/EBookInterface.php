<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * EBookInterface 是电子书的约定
 */
interface EBookInterFace
{
    /**
     * 下一页
     */
    public function pressNext();

    /**
     * 打开书
     */
    public function pressStart();
}