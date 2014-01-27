<?php

use DesignPatterns\Registry\Registry;

// while bootstrapping the application
Registry::set(Registry::LOGGER, new \StdClass());

// throughout the application
Registry::get(Registry::LOGGER)->log('foo');
