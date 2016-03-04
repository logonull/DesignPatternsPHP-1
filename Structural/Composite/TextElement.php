<?php

namespace DesignPatterns\Structural\Composite;

/**
 * 文本元素类
 */
class TextElement extends FormElement
{
    /**
     * 渲染文本元素
     * @param int $indent
     * @return string
     */
    public function render($indent=0)
    {
        return str_repeat(' ',$indent).'this is a text element';
    }
}