<?php

namespace Sergiors\Game\Test;

use Sergiors\Game\AbstractCharacter;
use Sergiors\Game\SkillInterface;

class AbstractCharacterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function a()
    {
        $knight = $this->getMockForAbstractClass(AbstractCharacter::class);
        $attack = $this->getMock(SkillInterface::class);
    }
}
