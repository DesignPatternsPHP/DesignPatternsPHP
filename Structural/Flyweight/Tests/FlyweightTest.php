<?php

namespace DesignPatterns\Structural\Flyweight\Tests;

use DesignPatterns\Structural\Flyweight\FlyweightFactory;

/**
 * FlyweightTest demonstrates how a client would use the flyweight structure
 * You don't have to change the code of your client.
 */
class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    private $characters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', );
    private $fonts = array('Arial', 'Times New Roman', 'Verdana', 'Helvetica');

    // This is about the number of characters in a book of average length
    private $numberOfCharacters = 300000;

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        for ($i = 0; $i < $this->numberOfCharacters; $i++) {
            $char = $this->characters[array_rand($this->characters)];
            $font = $this->fonts[array_rand($this->fonts)];
            $flyweight = $factory->$char;
            // External state can be passed in like this:
            // $flyweight->draw($font);
        }

        // Flyweight pattern ensures that instances are shared
        // instead of having hundreds of thousands of individual objects
        $this->assertLessThanOrEqual($factory->totalNumber(), count($this->characters));
    }
}
