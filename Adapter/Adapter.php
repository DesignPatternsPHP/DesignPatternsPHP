<?php

namespace DesignPatterns;

/**
 * adapter pattern
 *
 * Purpose:
 * to link two systems, that have different interfaces. An adapter defines interfaces that are equal for all linked
 * systems and wrap functionality
 *
 * Examples:
 * - different databases have the same interface to communicate although the underlying systems act differently
 * 
 * this is a VERY basic example which won't work at all!
 */
interface DatabaseAdapter
{
    public function getTables();
}

class MySQL implements DatabaseAdapter
{
    public function getTables()
    {
        return $this->select('SHOW TABLES');
    }
}

class SQLite implements DatabaseAdapter
{
    public function getTables()
    {
        return system('sqlite --list-tables');
    }
}

