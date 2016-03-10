<?php

namespace DesignPatterns\Creational\Prototype;

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBooKPrototype();

for ($i=0;$i<1000;$i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No'.$i);
}

for ($i = 0; $i < 5000; $i++) {
    $book = clone $barPrototype;
    $book->setTitle('Bar Book No '.$i);
}