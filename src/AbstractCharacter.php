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
     * @var PositionInterface
     */
    private $position;

    public function __construct()
    {
        $this->skills = new SkillCollection();
        $this->position = new Position();
    }

    public function getSkills(): SkillCollection
    {
        return $this->skills;
    }

    public function getPosition(): PositionInterface
    {
        return $this->position;
    }

    public function addSkill(SkillInterface $skill): CharacterInterface
    {
        $this->skills[] = $skill;

        return $this;
    }

    public function setPosition(PositionInterface $position)
    {
        $this->position = $position;
    }
}
