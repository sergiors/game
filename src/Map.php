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
        $x = $area->getPosition()->getX();
        $y = $area->getPosition()->getY();

        $this->areas[sprintf('%d:%d', $x, $y)] = $area;

        return $this;
    }

    public function getUpArea(AreaInterface $area)
    {
        return $this->getAreaXY(
            $area->getPosition()->getX() - 1,
            $area->getPosition()->getY()
        );
    }

    public function getDownArea(AreaInterface $area)
    {
        return $this->getAreaXY(
            $area->getPosition()->getX() + 1,
            $area->getPosition()->getY()
        );
    }

    public function getLeftArea(AreaInterface $area)
    {
        return $this->getAreaXY(
            $area->getPosition()->getX(),
            $area->getPosition()->getY() - 1
        );
    }

    public function getRightArea(AreaInterface $area)
    {
        return $this->getAreaXY(
            $area->getPosition()->getX(),
            $area->getPosition()->getY() + 1
        );
    }

    private function getAreaXY(int $x, int $y)
    {
        return $this->areas[sprintf('%d:%d', $x, $y)];
    }
}
