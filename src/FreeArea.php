<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class FreeArea implements AreaInterface, AccessibleInterface
{
    private $position;

    public function __construct(PositionInterface $position)
    {
        $this->position = $position;
    }

    public function getPosition(): PositionInterface
    {
        return $this->position;
    }
}
