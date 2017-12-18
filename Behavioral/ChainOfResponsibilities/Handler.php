<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Handler
{
    /**
     * @var Handler|null
     */
    private $successor = null;

    /**
     * Handler constructor.
     *
     * @param Handler|null $handler
     */
    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     * This approach by using a template method pattern ensures you that
     * each subclass will not forget to call the successor
     *
     * @param RequestInterface $request
     *
     * @return string|null
     */
    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if ($processed === null) {
            // the request has not been processed by this handler => see the next
            if ($this->successor !== null) {
                $processed = $this->successor->handle($request);
            }
        }

        return $processed;
    }

    /**
     * @param RequestInterface $request
     *
     * @return mixed
     */
    abstract protected function processing(RequestInterface $request);
}
