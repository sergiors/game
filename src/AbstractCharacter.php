<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
abstract class AbstractCharacter implements CharacterInterface
{
    /**
     * @var SkillInterface[]
     */
    private $skills;

    /**
     * @var AreaInterface
     */
    private $area;

    public function __construct()
    {
        $this->skills = new SkillCollection();
        $this->position = new Position();
    }

    public function getSkills(): SkillCollection
    {
        return $this->skills;
    }

    public function getArea(): AreaInterface
    {
        return $this->area;
    }

    public function addSkill(SkillInterface $skill): CharacterInterface
    {
        $this->skills[] = $skill;

        return $this;
    }

    public function setArea(AccessibleInterface $area)
    {
        $this->area = $area;
    }
}
