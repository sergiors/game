<?php

declare (strict_types = 1);

namespace Sergiors\Game;

interface AreaInterface
{
    public function __construct(PositionInterface $position);

    public function getPosition(): PositionInterface;
}
