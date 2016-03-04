<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 具体实现
 */
class Produce implements Workshop
{
    public function work()
    {
        echo "Produced ";
    }
}