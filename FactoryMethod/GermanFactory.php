<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\FactoryMethod;

/**
 * GermanFactory is vehicle factory in Germany
 */
class GermanFactory extends FactoryMethod
{

    /**
     * @inheritdoc
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case 'cheap' :
                return new Bicycle();
                break;
            case 'fast' :
                return new Porsche();
                break;
            default :
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }

}