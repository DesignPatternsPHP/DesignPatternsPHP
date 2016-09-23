<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * A factory manages shared flyweights. Clients should not instantiate them directly,
 * but let the factory take care of returning existing objects or creating new ones.
 */
class FlyweightFactory implements \Countable
{
    /**
     * @var CharacterFlyweight[]
     */
    private $pool = [];

    public function get(string $name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }
}
