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
 *
 * Examples:
 * - DB Object Relational Mapper (ORM)
 *
 */
class UserMapper
{

    protected $_adapter;

    public function __construct(array $options = null)
    {
        /**
         * create new Database connector on $_adapter using specific table
         *
         * $_adapter var could be a specific to a table class or a generic 
         * interface for connecting to Database and do certain jobs
         */
    }

    /**
     * saves a user object from memory to Database
     *
     * @return boolean
     */
    public function save(User $user)
    {
        /* $data keys shoulds correspond to valid Table columns on the Database */
        $data = array(
            'userid'   => $user->getUserId(),
            'username' => $user->getUsername(),
            'email'   => $user->getEmail(),
        );

        /* if no ID specified create new user else update the one in the Database */
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->_adapter->insert($data);
            return true;
        } else {
            $this->_adapter->update($data, array('userid = ?' => $id));
            return true;
        }

        return false;
    }

    /**
     * finds a user from Database based on ID and returns a User object located
     * in memory
     *
     * @return User
     */
    public function findById($id)
    {
        $result = $this->_adapter->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();

        var user = new User();
        $user->setUserID($row['userid']);
        $user->setUsername($row['username']);
        $user->setEmail($row['email']);

        return user;
    }

    /**
     * fetches an array from Database and returns an array of User objects
     * located in memory
     *
     * @return array
     */
    public function findAll()
    {
        $resultSet = $this->_adapter->findAll();
        $entries   = array();

        foreach ($resultSet as $row) {

            $entry = new User();
            $user->setUserID($row['userid']);
            $user->setUsername($row['username']);
            $user->setEmail($row['email']);

            $entries[] = $entry;
        }

        return $entries;
    }
}