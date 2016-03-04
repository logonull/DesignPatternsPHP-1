<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Book是一个具体的标准的纸质书
 *
 */
class Book implements PaperBookInterface
{
    /**
     * 翻页
     */
    public function turnPage(){}

    /**
     * 打开
     */
    public function open(){}

}