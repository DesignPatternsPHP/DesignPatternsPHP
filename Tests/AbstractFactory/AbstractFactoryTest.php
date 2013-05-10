<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Tests\AbstractFactory;

use DesignPatterns\AbstractFactory\AbstractFactory;
use DesignPatterns\AbstractFactory\HtmlFactory;
use DesignPatterns\AbstractFactory\JsonFactory;

/**
 * AbstractFactoryTest tests concrete factories
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * This is the client of factories. Note that the client does not
     * care which fatory is given to him, it can create any component he 
     * want and render how he wants.
     * 
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Lorem Ipsum'),
            $factory->createPicture('/image.jpg', 'caption'),
            $factory->createText('footnotes')
        );

        $this->assertContainsOnly('DesignPatterns\AbstractFactory\Media', $article);
    }

}