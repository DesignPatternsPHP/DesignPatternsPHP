<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

/**
 * Request is a request which goes through the chain of responsibilities.
 *
 * About the request: Sometimes, you don't need an object, just an integer or
 * an array. But in this case of a full example, I've made a class to illustrate
 * this important idea in the CoR (Chain of Responsibilities). In the real world,
 * I recommend to always use a class, even a \stdClass if you want, it proves
 * to be more adaptive because a single handler doesn't know much about the
 * outside world and it is more difficult if, one day, you want to add some
 * criterion in a decision process.
 */
class Request
{
    // getter and setter but I don't want to generate too much noise in handlers
}
