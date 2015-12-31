<?php
declare(strict_types=1);

namespace Sergiors\Game;

class SkillCollection implements \Countable, \ArrayAccess
{
    private $values = [];

    public function offsetExists($offset): bool
    {
        return isset($this->values[$offset]);
    }

    public function offsetGet($offset)
    {
        if (false === $this->offsetExists($offset)) {
            throw new \InvalidArgumentException();
        }

        return $this->values[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->values[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        if (false === $this->offsetExists($offset)) {
            return;
        }

        unset($this->values[$offset]);
    }

    public function count(): int
    {
        return count($this->values);
    }
}
