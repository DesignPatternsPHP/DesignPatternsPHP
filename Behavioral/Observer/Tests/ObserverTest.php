<?php

namespace DesignPatterns\Behavioral\Observer\Tests;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;

/**
 * ObserverTest tests the Observer pattern.
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{
    protected $observer;

    protected function setUp()
    {
        $this->observer = new UserObserver();
    }

    /**
     * Tests the notification.
     */
    public function testNotify()
    {
        $this->expectOutputString('DesignPatterns\Behavioral\Observer\User has been updated');
        $subject = new User();

        $subject->attach($this->observer);
        $subject->property = 123;
    }

    /**
     * Tests the subscribing.
     */
    public function testAttachDetach()
    {
        $subject = new User();
        $reflection = new \ReflectionProperty($subject, 'observers');

        $reflection->setAccessible(true);
        /** @var \SplObjectStorage $observers */
        $observers = $reflection->getValue($subject);

        $this->assertInstanceOf('SplObjectStorage', $observers);
        $this->assertFalse($observers->contains($this->observer));

        $subject->attach($this->observer);
        $this->assertTrue($observers->contains($this->observer));

        $subject->detach($this->observer);
        $this->assertFalse($observers->contains($this->observer));
    }

    /**
     * Tests the update() invocation on a mockup.
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
