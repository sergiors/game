<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Free implements AreaInterface, AccessibleInterface
{
    private $position;

    public function getPosition(): PositionInterface
    {
        return $this->position;
    }

    public function setPosition(PositionInterface $position)
    {
        $this->position = $position;
    }
}
