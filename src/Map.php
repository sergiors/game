<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class Map
{
    /**
     * @var Collection
     */
    private $areas;

    public function __construct()
    {
        $this->areas = new Collection();
    }

    public function getAreas()
    {
        return $this->areas;
    }

    public function addArea(AreaInterface $area): Map
    {
        $this->areas[] = $area;

        return $this;
    }

    public function getUpArea(AreaInterface $area): AreaInterface
    {

    }

    public function getDownArea(AreaInterface $area): AreaInterface
    {

    }

    public function getLeftArea(AreaInterface $area): AreaInterface
    {

    }

    public function getRightArea(AreaInterface $area): AreaInterface
    {

    }
}
