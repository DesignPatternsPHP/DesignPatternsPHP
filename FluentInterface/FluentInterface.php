<?php

namespace DesignPatterns;

/**
 * fluent interface pattern
 *
 * Purpose:
 * to write code that is easy readable just like "real" sentences
 *
 * Examples:
 * - Doctrine2's QueryBuilder works something like that example class below
 * - PHPUnit uses fluent interfaces to build mock objects
 * - Yii Framework: CDbCommand and CActiveRecord use this pattern too
 *
 */
class SQL
{
    protected $_fields = array();
    protected $_from = array();
    protected $_where = array();

    /**
     *
     * @param array $fields
     * @return SQL
     */
    public function select(array $fields = array())
    {
        $this->_fields = $fields;
        return $this;
    }

    /**
     *
     * @param string $table
     * @param string $alias
     * @return SQL
     */
    public function from($table, $alias)
    {
        $this->_from[] = $table . ' AS ' . $alias;
        return $this;
    }

    /**
     * @param string $condition
     * @return SQL
     */
    public function where($condition)
    {
        $this->_where[] = $condition;
        return $this;
    }
}

$instance = new SQL();
$instance->select(array('foo', 'bar'))
         ->from('foobar', 'f')
         ->where('f.bar = ?');