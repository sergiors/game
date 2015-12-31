<?php
declare(strict_types=1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
interface CharacterInterface
{
    public function getSkills();

    public function getPosition(): PositionInterface;

    public function addSkill(SkillInterface $skill);

    public function setPosition(PositionInterface $position);
}
