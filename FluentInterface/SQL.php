<?php

namespace DesignPatterns\FluentInterface;

/**
 * fluent interface pattern
 *
 * Purpose:
 * to write code that is easy readable just like "real" sentences
 *
 * Examples:
 * - Doctrine2's QueryBuilder works something like that example class below
 * - PHPUnit uses fluent interfaces to build mock objects
 * - Yii Framework: CDbCommand and CActiveRecord use this pattern, too
 */
class SQL
{
    /**
     * @var array
     */
    protected $fields = array();

    /**
     * @var array
     */
    protected $from = array();

    /**
     * @var array
     */
    protected $where = array();

    /**
     * adds select fields
     *
     * @param array $fields
     *
     * @return SQL
     */
    public function select(array $fields = array())
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * adds a FROM clause
     *
     * @param string $table
     * @param string $alias
     *
     * @return SQL
     */
    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    /**
     * adds a WHERE condition
     *
     * @param string $condition
     *
     * @return SQL
     */
    public function where($condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    /**
     * Gets the query, just an example of building a query, 
     * no check on consistency
     *
     * @return string
     */
    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
                . ' FROM ' . implode(',', $this->from)
                . ' WHERE ' . implode(' AND ', $this->where);
    }
}
