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

    protected $deck;

    protected function setUp()
    {
        $this->deck = new CardGame();
    }

    /**
     * This is the client of the iterator.
     * It remains unchanged even if one day I decide to use MongoDB to store the
     * card.
     */
    public function testCardinal()
    {
        $counter = 0;
        foreach ($this->deck as $key => $card) {
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
        $this->assertCount(32, $this->deck);
        // a easy way to get an array from interator :
        $cards = iterator_to_array($this->deck);
        $this->assertEquals('A of S', $cards['SA']);
        // a easy way to get an iterator from an array :
        $iterator = new \ArrayIterator($cards);
        $this->assertInstanceOf('\Iterator', $iterator);
    }

    /**
     * Iterator can be combine, chained, filter, there are many in the SPL
     * and sadly they are rarely used.
     */
    public function testIteratorCombining()
    {
        // a fancy way to add a joker to the deck :
        $joker = array('JK' => 'Joker');
        $newDeck = new \AppendIterator();
        $newDeck->append($this->deck);
        $newDeck->append(new \ArrayIterator($joker));
        $this->assertCount(33, $newDeck);
    }

}