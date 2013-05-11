<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Tests\Iterator;

use DesignPatterns\Iterator\CardGame;

/**
 * IteratorTest tests the CardGame iterator
 */
class IteratorTest extends \PHPUnit_Framework_TestCase
{

    protected $game;

    protected function setUp()
    {
        $this->game = new CardGame();
    }

    /**
     * This is the client of the iterator.
     * It remains unchanged even if one day I decide to use MongoDB to store the
     * card.
     */
    public function testCardinal()
    {
        $counter = 0;
        foreach ($this->game as $key => $card) {
            $counter++;
        }

        $this->assertEquals(32, $counter);
    }

    /**
     * Some fancy functions of PHP.
     */
    public function testExampleOf_PHP_Helper()
    {
        // PHPUnit works on array or iterator :
        $this->assertCount(32, $this->game);
        // a easy way to get an array from interator :
        $cards = iterator_to_array($this->game);
        $this->assertEquals('A of S', $cards['SA']);
        // a easy way to get an iterator from an array :
        $iterator = new \ArrayIterator($cards);
        $this->assertInstanceOf('\Iterator', $iterator);
    }

}