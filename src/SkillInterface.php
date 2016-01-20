<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
interface SkillInterface
{
    public function getName(): string;

    public function getValue(): int;

    public function setName(string $name);

    public function setValue(int $value);
}
