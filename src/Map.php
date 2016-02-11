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

    public function getUpArea(AreaInterface $area): AreaInterface
    {
        return $this->getAreaXY(
            $area->getPosition()->getX() - 1,
            $area->getPosition()->getY()
        ) ?: $area;
    }

    public function getDownArea(AreaInterface $area): AreaInterface
    {
        return $this->getAreaXY(
            $area->getPosition()->getX() + 1,
            $area->getPosition()->getY()
        ) ?: $area;
    }

    public function getLeftArea(AreaInterface $area): AreaInterface
    {
        return $this->getAreaXY(
            $area->getPosition()->getX(),
            $area->getPosition()->getY() - 1
        ) ?: $area;
    }

    public function getRightArea(AreaInterface $area): AreaInterface
    {
        return $this->getAreaXY(
            $area->getPosition()->getX(),
            $area->getPosition()->getY() + 1
        ) ?: $area;
    }

    private function getAreaXY(int $x, int $y)
    {
        try {
            $area = $this->areas[sprintf('%d:%d', $x, $y)];

            if ($area instanceof AccessibleInterface) {
                return $area;
            }
        } catch (\InvalidArgumentException $e) {
        }

        return;
    }
}
