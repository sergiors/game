<?php

declare (strict_types = 1);

namespace Sergiors\Game;

class Map
{
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
}
