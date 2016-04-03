<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * class UserMapper.
 */
class UserMapper
{
    /**
     * @var DBAL
     */
    protected $adapter;

    /**
     * @param DBAL $dbLayer
     */
    public function __construct(DBAL $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    /**
     * saves a user object from memory to Database.
     *
     * @param User $user
     *
     * @return bool
     */
    public function save(User $user)
    {
        /* $data keys should correspond to valid Table columns on the Database */
        $data = array(
            'userid' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
        );

        /* if no ID specified create new user else update the one in the Database */
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data, array('userid = ?' => $id));

            return true;
        }
    }

    /**
     * finds a user from Database based on ID and returns a User object located
     * in memory.
     *
     * @param int $id
     *
     * @throws \InvalidArgumentException
     *
     * @return User
     */
    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if (0 == count($result)) {
            throw new \InvalidArgumentException("User #$id not found");
        }
        $row = $result->current();

        return $this->mapObject($row);
    }

    /**
     * fetches an array from Database and returns an array of User objects
     * located in memory.
     *
     * @return array
     */
    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    /**
     * Maps a table row to an object.
     *
     * @param array $row
     *
     * @return User
     */
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);

        return $entry;
    }
}
