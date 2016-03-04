<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 抽象
 */
abstract class Vehicle
{
    protected $workShop1;
    protected $workShop2;

    protected function __construct(Workshop $workshop1,Workshop $workshop2)
    {
        $this->workShop1=$workshop1;
        $this->workShop2=$workshop2;
    }

    public function manufacture()
    {

    }
}

