<?php

namespace DesignPatterns\Structural\Facade\Tests;

use DesignPatterns\Structural\Facade\Facade as Computer;
use DesignPatterns\Structural\Facade\OsInterface;

/**
 * FacadeTest shows example of facades.
 * FacadeTest 显示出facades的例子
 */
class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function getComputer()
    {
        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\BiosInterface')
            ->setMethods(array('launch', 'execute', 'waitForKeyPress'))
            ->disableAutoload()
            ->getMock();
        $operatingSys = $this->getMockBuilder('DesignPatterns\Structural\Facade\OsInterface')
            ->setMethods(array('getName'))
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($operatingSys);
        $operatingSys
            ->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));

        $facade = new Computer($bios,$operatingSys);

        return [[$facade,$operatingSys]];
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerON(Computer $facade,OsInterface $os)
    {
        $facade->turnOn();
        $this->assertEquals('Linux',$os->getName());
    }
}