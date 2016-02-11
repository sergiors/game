<?php

declare (strict_types = 1);

namespace Sergiors\Game;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
class Collection implements \Countable, \ArrayAccess
{
    /**
     * @var array
     */
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
        if (null === $offset) {
            $this->values[] = $value;

            return;
        }

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
