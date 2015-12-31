<?php
declare(strict_types=1);

namespace Sergiors\Game;

interface SkillInterface
{
    public function getName();

    public function getValue();

    public function setName(string $name);

    public function setValue(int $value);
}
