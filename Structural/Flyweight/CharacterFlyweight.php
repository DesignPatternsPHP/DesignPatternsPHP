<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Implements the flyweight interface and adds storage for intrinsic state, if any.
 * Instances of concrete flyweights are shared by means of a factory.
 */
class CharacterFlyweight implements FlyweightInterface
{
    /**
     * Any state stored by the concrete flyweight must be independent of its context.
     * For flyweights representing characters, this is usually the corresponding character code.
     *
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Clients supply the context-dependent information that the flyweight needs to draw itself
     * For flyweights representing characters, extrinsic state usually contains e.g. the font.
     *
     * @param string $font
     */
    public function draw($font)
    {
        print_r("Character {$this->name} printed $font \n");
    }
}
