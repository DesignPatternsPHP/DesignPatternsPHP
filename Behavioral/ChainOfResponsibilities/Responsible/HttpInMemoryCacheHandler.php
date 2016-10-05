<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     * @param Handler|null $successor
     */
    public function __construct(array $data, Handler $successor = null)
    {
        parent::__construct($successor);

        $this->data = $data;
    }

    /**
     * @param RequestInterface $request
     *
     * @return string|null
     */
    protected function processing(RequestInterface $request)
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}
