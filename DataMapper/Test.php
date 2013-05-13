<?php 

namespace DesignPatterns;

/**
 * DataMapper pattern
 *
 * Testing the DataMapper Pattern
 */

	$userMapper = new UserMapper();

	/* fetch a record from Database */
	$user = $userMapper->findById(1);

	if ($user !== null) {
		echo "Hello " . $user->getUsername() . ". Your email is " . $user->getEmail();
	}

	/* save a new record on Database */
	var $newUser = new User('', 'Odysseus', 'Odysseus@ithaca.gr');
	$userMapper->save($newUser);

	/* fetch all from a table on Database */
	var $user = $userMapper->findAll();

?>