<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dominik
 * Date: 21.08.11
 * Time: 15:42
 * To change this template use File | Settings | File Templates.
 */

namespace DesignPatterns\AbstractFactory;

class Picture implements Media
{
    protected $_path;
    protected $_name;

    /**
     *
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->_name = (string) $name;
        $this->_path = (string) $path;
    }
}
