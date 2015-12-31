<?php
namespace Sergiors\Game\Test;

use Sergiors\Game\SkillCollection;

class SkillCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturn()
    {
        $collection = new SkillCollection();
        $collection[10] = 'test';

        $this->assertEquals('test', $collection[10]);

    }
}
