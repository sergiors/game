<?php

namespace Sergiors\Game\Test;

use Sergiors\Game\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnACollection()
    {
        $collection = new Collection();
        $collection[10] = 'test';
        $collection['attack'] = true;

        $this->assertEquals('test', $collection[10]);
        $this->assertCount(2, $collection);

        unset($collection['attack']);
        $this->assertCount(1, $collection);
    }

    /**
     * @test
     */
    public function shouldReturnItemWithoutIndex()
    {
        $collection = new Collection();
        $collection[] = 'one';
        $collection[] = 'two';
        $collection[] = 'tree';
        $collection[] = 'four';

        $this->assertCount(4, $collection);
    }

    /**
     * @test
     *
     * @expectedException \InvalidArgumentException
     */
    public function shouldReturnInvalidArgumentException()
    {
        $collection = new Collection();
        $collection['test'];
    }
}
