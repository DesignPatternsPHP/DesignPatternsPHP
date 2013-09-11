<?php

/**
 * PHP Design Patterns
 *
 * @pattern : Singleton
 * @type    : Creational
 * @author  : Yousef Ismaeil <cliprz@gmail.com>
 */

namespace DesignPatterns\AbstractFactory;

abstract class Singleton {

    /**
     * Instance
     *
     * @access private
     * @static
     */
    private static $instance = [];

    /**
     * Singleton
     *
     * @access public
     * @static
     */
    public static function getInstance () {
        $class = get_called_class();
        if (!isset(self::$instance[$class])) {
            // get called class
            self::$instance[$class] = new $class();
        }
        return self::$instance[$class];
    }

    /**
     * Construct access private
     * Wakeup access private
     * Clone access private
     */
    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }

}

class Foo extends Singleton {



}

class Bar extends Singleton {


}

/** Testing */

$a = Foo::getInstance();
$b = Foo::getInstance();
$c = Foo::getInstance();

$x = Bar::getInstance();
$y = Bar::getInstance();
$z = Bar::getInstance();

var_dump($a,$b,$c,$x,$y,$z);

?>