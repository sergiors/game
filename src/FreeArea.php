<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class FreeArea implements AreaInterface, AccessibleInterface
{
    /**
     * @var PositionInterface
     */
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
