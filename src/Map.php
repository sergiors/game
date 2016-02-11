<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Map
{
    private $areas;

    public function __construct()
    {
        $this->areas = new AreaCollection();
    }

    public function getAreas()
    {
        return $this->areas;
    }

    public function addArea(AreaInterface $area)
    {
        $this->areas[] = $area;
    }
}
