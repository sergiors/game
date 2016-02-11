<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
interface CharacterInterface
{
    public function getSkills(): SkillCollection;

    public function getArea(): AccessibleInterface;

    public function addSkill(SkillInterface $skill);

    public function setArea(AccessibleInterface $area);
}
