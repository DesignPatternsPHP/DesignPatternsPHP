<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\FactoryMethod;

/**
 * ItalianFactory is vehicle factory in Italy
 */
class ItalianFactory extends FactoryMethod
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
                return new Ferrari();
                break;
            default :
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }

}