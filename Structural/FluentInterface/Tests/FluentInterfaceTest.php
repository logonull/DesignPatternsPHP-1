<?php

namespace DesignPatterns\Structural\FluentInterface\Tests;

use DesignPatterns\Structural\FluentInterface\Sql;

/**
 * FluentInterfaceTest 测试sql流 interface .
 */

class FluentInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildSQL()
    {
        $instance=new Sql();
        $query=$instance->select(['foo','bar'])
                ->from('foobar','f')
                ->where('f.bar = ?')
                ->getQuery();
        $this->assertEquals('SELECT foo,bar FROM foobar AS f WHERE f.bar = ?', $query);
    }
}