<?php

declare (strict_types = 1);

namespace Sergiors\Game;

interface AreaInterface
{
    public function getPosition(): PositionInterface;

    public function setPosition(PositionInterface $position);
}
