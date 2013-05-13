<?php 

namespace DesignPatterns;

/**
 * DataMapper pattern
 *
 * Testing the DataMapper Pattern
 */

	$userMapper = new UserMapper();

	$user = $userMapper->find(1);

	if ($user !== null) {
		echo "Hello " . $user->getUsername() . ". Your email is " . $user->getEmail();
	}

?>