<?php

namespace DesignPatterns\Tests\Observer;

use DesignPatterns\Observer\UserObserver;
use DesignPatterns\Observer\User;

/**
 * ObserverTest tests the Observer pattern
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{

    protected $observer;

    protected function setUp()
    {
        $this->observer = new UserObserver();
    }

    /**
     * Tests the notification
     */
    public function testNotify()
    {
        $this->expectOutputString('DesignPatterns\Observer\User has been updated');
        $subject = new User();

        $subject->attach($this->observer);
        $subject->property = 123;
    }

    /**
     * Tests the subscribing
     */
    public function testAttachDetach()
    {
        $subject = new User();
        $this->assertAttributeEmpty('_observers', $subject);
        $subject->attach($this->observer);
        $this->assertAttributeNotEmpty('_observers', $subject);
        $subject->detach($this->observer);
        $this->assertAttributeEmpty('_observers', $subject);
    }

    /**
     * Tests the update() invocation on a mockup
     */
    public function testUpdateCalling()
    {
        $subject = new User();
        $observer = $this->getMock('SplObserver');
        $subject->attach($observer);

        $observer->expects($this->once())
                ->method('update')
                ->with($subject);

        $subject->notify();
    }

}