<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * the Decorator MUST implement the RendererInterface contract, this is the key-feature
 * of this design pattern. If not, this is no longer a Decorator but just a dumb
 * wrapper.
 */

/**
 * class Decorator.
 */
abstract class Decorator implements RendererInterface
{
    /**
     * @var RendererInterface
     */
    protected $wrapped;

    /**
     * You must type-hint the wrapped component :
     * It ensures you can call renderData() in the subclasses !
     *
     * @param RendererInterface $wrappable
     */
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}
