<?php

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite;

/**
 * FormTest 在表单中测试这个组合。
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $form = new Composite\Form();
        $form->addElement(new Composite\TextElement());
        $form->addElement(new Composite\InputElement());
        $embed = new Composite\Form();
        $embed->addElement(new Composite\TextElement());
        $embed->addElement(new Composite\InputElement());
        $form->addElement($embed);  // here we have a embedded form (like SF2 does)

        $this->assertRegExp('#^\s{4}#m', $form->render());
    }

    /**
     * 如果你想要建立一棵树，在这个模式中最重要的就是,一个组合必须从节点继承。
     */
    public function testFormImplementsFormEelement()
    {
        $className = 'DesignPatterns\Structural\Composite\Form';
        $abstractName = 'DesignPatterns\Structural\Composite\FormElement';
        $this->assertTrue(is_subclass_of($className, $abstractName));
    }
}
