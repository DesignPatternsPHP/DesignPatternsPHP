<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

/**
 * AbstractFactoryTest tests concrete factories.
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory()),
        );
    }

    /**
     * This is the client of factories. Note that the client does not
     * care which factory is given to him, he can create any component he
     * wants and render how he wants.
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Lorem Ipsum'),
            $factory->createPicture('/image.jpg', 'caption'),
            $factory->createText('footnotes'),
        );

        $this->assertContainsOnly('DesignPatterns\Creational\AbstractFactory\MediaInterface', $article);

        /* this is the time to look at the Builder pattern. This pattern
         * helps you to create complex object like that article above with
         * a given Abstract Factory
         */
    }
}
