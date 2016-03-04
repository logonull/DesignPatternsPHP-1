<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * PaperBookInterface 是纸质书的约定
 */

interface PaperBookInterface
{
    /**
     * 翻页
     * @return mixed
     */
    public function turnPage();

    /**
     * 打开
     * @return mixed
     */
    public function open();
}
