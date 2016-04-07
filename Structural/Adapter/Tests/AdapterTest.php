<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\PaperBookInterface;

/**
 * AdapterTest shows the use of an adapted e-book that behave like a book
 * You don't have to change the code of your client.
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function getBook()
    {
        return array(
            array(new Book()),
            // we build a "wrapped" electronic book in the adapter
            array(new EBookAdapter(new Kindle())),
        );
    }

    /**
     * This client only knows paper book but surprise, surprise, the second book
     * is in fact an electronic book, but both work the same way.
     *
     * @param PaperBookInterface $book
     *
     * @dataProvider getBook
     */
    public function testIAmAnOldClient(PaperBookInterface $book)
    {
        $this->assertTrue(method_exists($book, 'open'));
        $this->assertTrue(method_exists($book, 'turnPage'));
    }
}
