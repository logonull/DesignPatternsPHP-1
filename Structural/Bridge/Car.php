<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 处理抽象类
 */
class Car extends Vehicle
{
    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        parent::__construct( $workShop1, $workShop2);
    }

    public function manufacture()
    {
        echo "Car ";
        $this->workShop1->work();
        $this->workShop2->work();
    }
}