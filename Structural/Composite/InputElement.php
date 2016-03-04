<?php

namespace DesignPatterns\Structural\Composite;

/**
 * 输入元素类
 */
class InputElement extends FormElement
{
    /**
     * 渲染输入元素html
     *
     * @param int $indent
     *
     * @return mixed|string
     */
    public function render($indent = 0)
    {
        return str_repeat(' ', $indent).'<input type="text" />';
    }
}
