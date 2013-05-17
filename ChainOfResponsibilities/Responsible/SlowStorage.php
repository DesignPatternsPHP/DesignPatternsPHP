<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\ChainOfResponsibilities\Responsible;

use DesignPatterns\ChainOfResponsibilities\Handler;
use DesignPatterns\ChainOfResponsibilities\Request;

/**
 * This is mostly the same code as FastStorage but in fact, it may greatly differs
 * 
 * One important fact about CoR : each item in the chain MUST NOT assume its position
 * in the chain. A CoR is not responsible if the request is not handled UNLESS
 * you make an "ExceptionHandler" which throws execption if the request goes there.
 * 
 * To be really extendable, each handler doesn't know if there is something after him.
 * 
 */
class SlowStorage extends Handler
{

    protected $_data = array();

    public function __construct($data = array())
    {
        $this->_data = $data;
    }

    protected function processing(Request $req)
    {
        if ('get' === $req->verb) {
            if (array_key_exists($req->key, $this->_data)) {
                $req->response = $this->_data[$req->key];
                return true;
            }
        }

        return false;
    }

}
