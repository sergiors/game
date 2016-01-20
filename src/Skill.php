<?php

declare (strict_types = 1);

namespace Sergiors\Game;

final class Skill implements SkillInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }
}
