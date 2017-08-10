<?php

namespace DesignPatterns\Structural\Bridge;

class HelloWorldService extends Service
{
    /**
     * @return mixed
     */
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}
