<?php
namespace Sergiors\Game\Test;

use Sergiors\Game\SkillCollection;

class SkillCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnACollection()
    {
        $collection = new SkillCollection();
        $collection[10] = 'test';
        $collection['attack'] = true;

        $this->assertEquals('test', $collection[10]);
        $this->assertCount(2, $collection);

        unset($collection['attack']);
        $this->assertCount(1, $collection);
    }

    /**
     * @test
     *
     * @expectedException \InvalidArgumentException
     */
    public function shouldReturnInvalidArgumentException()
    {
        $collection = new SkillCollection();
        $collection['test'];
    }
}
