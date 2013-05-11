<?php

namespace DesignPatterns;

/**
 * DataMapper pattern
 *
 * Purpose:
 * A Data Mapper, is a Data Access Layer that performs bidirectional transfer of
 * data between a persistent data store (often a relational database) and an in
 * memory data representation (the domain layer). The goal of the pattern is to
 * keep the in memory representation and the persistent data store independent of
 * each other and the data mapper itself. The layer is composed of one or more
 * mappers (or Data Access Objects), performing the data transfer. Mapper
 * implementations vary in scope. Generic mappers will handle many different domain
 * entity types, dedicated mappers will handle one or a few.
 * (FROM http://en.wikipedia.org/wiki/Data_mapper_pattern)
 *
 * Examples:
 * - DB Object Relational Mapper (ORM)
 *
 */
class UserMapper
{

    // the table where the mapper is mapping
    protected $_dbTable;

    public function __construct(array $options = null)
    {
        // create new db connector on dbTable using specific table
    }

    // will save a certain user from memory to db
    public function save(User $user)
    {
        $data = array(
            'userid'   => $user->getUserId(),
            'username' => $user->getUsername(),
            'email'   => $user->getEmail(),
        );

        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->_dbTable->insert($data);
        } else {
            $this->_dbTable->update($data, array('userid = ?' => $id));
        }
    }

    // will find a user from db based on the id and return it to a User object in memory
    public function find($id, User $user)
    {
        $result = $this->_dbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();

        $user->setOptions($row);
    }

    // will fetch all entries from a table to memory
    public function fetchAll()
    {
        $resultSet = $this->_dbTable()->fetchAll();
        $entries   = array();

        foreach ($resultSet as $row) {
            $entry = new User();
            $entry->setOptions($row);
            $entries[] = $entry;
        }

        return $entries;
    }
}