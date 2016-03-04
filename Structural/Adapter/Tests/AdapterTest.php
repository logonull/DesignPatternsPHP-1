<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\PaperBookInterface;
use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\EBookAdapter;

/**
 * AdapterTest 展示了使用一个电子书像纸质书一样
 * 你不需要改变你的基本(client)代码
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function getBook()
    {
        return array(
            array(new Book()),
            //我们建立一个 "包裹好的" 电子书在适配器中
            array(new EBookAdapter(new Kindle())),
        );
    }

    /**
     * 这个客户端仅仅知道纸质书,但是非常惊奇的是:第二本书是电子书，但是可以用相同的办法工作
     * @param PaperBookInterface $book
     * @dataProvider getBook
     */
    public function testIAmAnOldClient(PaperBookInterface $book)
    {
        $this->assertTrue(method_exists($book, 'open'));
        $this->assertTrue(method_exists($book, 'turnPage'));
    }
}