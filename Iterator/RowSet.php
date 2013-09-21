<?php

namespace DesignPatterns\Iterator;

/**
 * Class RowSet
 */
class RowSet implements \Iterator
{
    /**
     * @var
     */
    protected $currentRow;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var int
     */
    protected $lineNumber;

    /**
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * composite pattern: run through all rows and process them
     *
     * @return void
     */
    public function process()
    {
        // this actually calls rewind(), { next(), valid(), key() and current() :}
        /**
         * THE key feature of the Iterator Pattern is to provide a *public contract*
         * to iterate on a collection without knowing how items are handled inside
         * the collection. It is not just an easy way to use "foreach"
         *
         * One cannot see the point of iterator pattern if you iterate on $this.
         * This example is unclear and mixed with some Composite pattern ideas.
         */
        foreach ($this as $line => $row) {
            $row->process();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        // seek to first line from $this->file
    }

    /**
     * {@inheritdoc}
     */
    public function next()
    {
        // read the next line from $this->file
        if (!$eof) {
            $data = ''; // get the line
            $this->currentRow = new Row($data);
        } else {
            $this->currentRow = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function current()
    {
        return $this->currentRow;
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return null !== $this->currentRow;
    }

    /**
     * {@inheritdoc}
     */
    public function key()
    {
        // you would want to increment this in next() or whatsoever
        return $this->lineNumber;
    }
}
