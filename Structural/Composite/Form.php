<?php

namespace DesignPatterns\Structural\Composite;

/**
 * 这个组合节点必须继承组件的约定。要建成一个组件树这是必须的。
 */
class Form extends FormElement
{
    /**
     * @var array|FormElement[]
     */
    protected $elements;

    /**
     * 通过运行所有的元素，调用render方法，返回整个表单的显示.
     * 从外面看来，没人知道这些，这个表单像一个对象一样工作.
     *
     * @param int $indent
     *
     * @return string
     */
    public function render($indent = 0)
    {
        $formCode = '';

        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent + 1).PHP_EOL;
        }

        return $formCode;
    }

    /**
     * 增加表单元素
     * @param  FormElement $element 表单元素
     */
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}