<?php

namespace Sergiors\Game\Test;

use Sergiors\Game\AbstractCharacter;
use Sergiors\Game\SkillInterface;

class AbstractCharacterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function skills()
    {
        $knight = $this->getMockForAbstractClass(AbstractCharacter::class);
    }
}
