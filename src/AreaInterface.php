<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
interface AreaInterface
{
    public function __construct(PositionInterface $position);

    public function getPosition(): PositionInterface;
}
