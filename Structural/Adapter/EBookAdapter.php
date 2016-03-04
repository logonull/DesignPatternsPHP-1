<?php

namespace DesignPatterns\Structural\Adapter;


/**
 * 这个类使一个接口完全地翻译到另一个接口
 */
class EBookAdapter implements PaperBookInterface
{
    /**
     * @var EBookInterFace
     */
    protected $eBook;

    /**
     * 注意这个构造函数，它"包含"了一个电子书
     * @param EBookInterFace $eBook
     */
    public function __construct(EBookInterFace $eBook)
    {
        $this->eBook=$eBook;
    }

    /**
     * 打开
     */
    public function open(){
        $this->eBook->pressStart();
    }

    /**
     * 翻页
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}