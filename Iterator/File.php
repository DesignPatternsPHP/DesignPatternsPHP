<?php

namespace DesignPatterns\Iterator;

/**
 * class File
 *
 * THIS EXAMPLE ALSO APPLIES THE COMPOSITE PATTERN
 */
class File
{
    /**
     * @var RowSet
     */
    protected $rowSet;

    /**
     * @var string
     */
    protected $pathName;

    /**
     * @param string $pathName
     */
    public function __construct($pathName)
    {
        $this->rowSet = new Rowset($this);
    }

    /**
     * processes the rowSet
     */
    public function process()
    {
        // this is the place to show how using an iterator, with foreach
        // See the CardGame.php file
        $this->rowSet->process();
    }
}
