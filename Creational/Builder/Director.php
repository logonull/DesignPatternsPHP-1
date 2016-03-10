<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Director是建造器模式的一部分。它知道建造的接口而且可以建立一个复杂对象根据建造器的帮助。
 * 你也可以注入更多的建造者简历更复杂的对象。
 */
class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}