<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Test\DataMapper;

use DesignPatterns\DataMapper\UserMapper;
use DesignPatterns\DataMapper\User;

/**
 * UserMapperTest tests the datamappe pattern
 */
class UserMapperTest extends \PHPUnit_Framework_TestCase
{

    protected $mapper;
    protected $dbal;

    protected function setUp()
    {
        $this->dbal = $this->getMockBuilder('DesignPatterns\DataMapper\DBAL')
                ->disableAutoload()
                ->setMethods(array('insert', 'update', 'find', 'findAll'))
                ->getMock();

        $this->mapper = new UserMapper($this->dbal);
    }

    public function getNewUser()
    {
        return array(array(new User(null, 'Odysseus', 'Odysseus@ithaca.gr')));
    }

    public function getExistingUser()
    {
        return array(array(new User(1, 'Odysseus', 'Odysseus@ithaca.gr')));
    }

    /**
     * @dataProvider getNewUser
     */
    public function testPersistNew(User $user)
    {
        $this->dbal->expects($this->once())
                ->method('insert');
        $this->mapper->save($user);
    }

    /**
     * @dataProvider getExistingUser
     */
    public function testPersistExisting(User $user)
    {
        $this->dbal->expects($this->once())
                ->method('update');
        $this->mapper->save($user);
    }

    /**
     * @dataProvider getExistingUser
     */
    public function testRestoreOne(User $existing)
    {
        $rows = new \ArrayIterator([['userid' => 1, 'username' => 'Odysseus', 'email' => 'Odysseus@ithaca.gr']]);
        $this->dbal->expects($this->once())
                ->method('find')
                ->with(1)
                ->will($this->returnValue($rows));

        $user = $this->mapper->findById(1);
        $this->assertEquals($existing, $user);
    }

    /**
     * @dataProvider getExistingUser
     */
    public function testRestoreMulti(User $existing)
    {
        $rows = [['userid' => 1, 'username' => 'Odysseus', 'email' => 'Odysseus@ithaca.gr']];
        $this->dbal->expects($this->once())
                ->method('findAll')
                ->will($this->returnValue($rows));

        $user = $this->mapper->findAll();
        $this->assertEquals([$existing], $user);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage User #404 not found
     */
    public function testNotFound()
    {
        $this->dbal->expects($this->once())
                ->method('find')
                ->with(404)
                ->will($this->returnValue([]));

        $user = $this->mapper->findById(404);
    }

}
