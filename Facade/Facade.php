<?php

namespace DesignPatterns;

/**
 * facade pattern
 *
 * Purpose:
 * like a real facade, to hide complexity behind the wall
 *
 * Examples:
 *  - Database Abstraction Layers
 *  - Doctrine2: EntityManager is the facade that one sees from the outside, but in there is much more going on, Unit of
 *    Work, etc.
 *
 */
class Facade
{
    private $_text;
    private $_queryBuilder;

    public function __construct($text)
    {
        $text .= ', called ' . __METHOD__ . ' and thought that would be fairly easy, but ...';
        $this->_text = $text;

        $this->_initQueryBuilder($text);
    }

    protected function _initQueryBuilder($sql)
    {
        $query = new QueryBuilder();
        $query->setSql($sql);
        $this->_queryBuilder = $query;
    }
}

class QueryBuilder
{
    protected $_sql;

    public function setSql($sql)
    {
        $this->_sql = $sql;
    }
}

// this is just a simple call, but behind the facade, there's much more going on
$foo = new Facade('very simple');
