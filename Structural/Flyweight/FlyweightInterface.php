<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * An interface through which flyweights can receive and act on extrinsic state
 */
interface FlyweightInterface {

	public function draw($extrinsicState);

}