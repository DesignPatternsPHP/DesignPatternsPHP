<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * the Decorator MUST implement the RenderableInterface contract, this is the key-feature
 * of this design pattern. If not, this is no longer a Decorator but just a dumb
 * wrapper.
 */
abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    /**
     * @param RenderableInterface $renderer
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}
