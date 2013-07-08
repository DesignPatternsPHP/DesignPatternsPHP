<?php

namespace DesignPatterns\DataMapper;

/**
 * DataMapper pattern
 *
 * This is our representation of a DataBase record in the memory
 *
 */
class User
{
	protected $userId;
    protected $username;
    protected $email;

	public function __construct($id = null, $username = null, $email = null)
    {
        $this->userId = $id;
        $this->username = $username;
        $this->email = $email;
    }

	public function getUserId() {
		return $this->userId;
	}

	public function setUserID($userId) {
		$this->userId = $userId;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

}