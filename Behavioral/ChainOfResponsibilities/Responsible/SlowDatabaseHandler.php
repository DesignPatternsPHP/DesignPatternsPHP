<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    /**
     * @param RequestInterface $request
     *
     * @return string|null
     */
    protected function processing(RequestInterface $request)
    {
        // this is a mockup, in production code you would ask a slow (compared to in-memory) DB for the results

        return 'Hello World!';
    }
}
