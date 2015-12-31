<?php
declare(strict_types=1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
interface PositionInterface
{
    public function __construct(int $x = 0, int $y = 0);

    public function getX(): int;

    public function getY(): int;

    public function setX(int $value);

    public function setY(int $value);
}
