<?php

namespace DesignPatterns\Structural\StateContainer\Tests;

use DesignPatterns\Structural\StateContainer\StateContainer;

class StateContainerTest extends \PHPUnit_Framework_TestCase
{

    public function setup()
    {
        StateContainer::init(function ($state, $action) {

            switch ($action) {
              
                case 'INCREMENT':
                    return $state = $state + 1;
                    break;

                case 'DECREMENT':
                    return $state = $state - 1;
                    break;

                default:
                    return 0;
                    break;

            }

        });
    }

    /**
     * Using StateContainer as central repository of truth from which
     * derive html presentation.
     */
    public function testStateModify()
    {
        StateContainer::dispatch('INCREMENT');
        $this->assertEquals(1, StateContainer::getState());
    }


    /**
     * Using StateContainer as a reliable and straight forward
     * approach to reproduce use cases.
     */
    public function testReplayActions()
    {
        $actions = array('INCREMENT', 'INCREMENT', 'DECREMENT', 'INCREMENT');

        foreach ($actions as $action) {
            StateContainer::dispatch($action);
        }

        $this->assertEquals(2, StateContainer::getState());
    }
}
