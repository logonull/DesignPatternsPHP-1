<?php

namespace DesignPatterns\Structural\Composite;

/**
 * 表单元素类
 */
abstract class FormElement
{
    /**
     * 渲染元素代码
     *
     * @param int $indent
     */
    abstract public function render($indent=0);
}