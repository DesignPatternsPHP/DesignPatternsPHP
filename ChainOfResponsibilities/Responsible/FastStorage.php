<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\ChainOfResponsibilities\Responsible;

use DesignPatterns\ChainOfResponsibilities\Handler;
use DesignPatterns\ChainOfResponsibilities\Request;

class FastStorage extends Handler
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
                // the handler IS responsible and then processes the request
                $req->response = $this->_data[$req->key];
                // instead of returning true, I could return the value but it proves
                // to be a bad idea. What if the value IS "false" ?
                return true;
            }
        }

        return false;
    }

}
