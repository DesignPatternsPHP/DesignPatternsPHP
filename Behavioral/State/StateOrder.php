<?php

namespace DesignPatterns\Behavioral\State;

abstract class StateOrder
{
    /**
     * @var array
     */
    private $details;

    /**
     * @var StateOrder $state
     */
    protected static $state;

    /**
     * @return mixed
     */
    abstract protected function done();

    /**
     * @param string $status
     */
    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updatedTime'] = time();
    }

    /**
     * @return string
     */
    protected function getStatus(): string
    {
        return $this->details['status'];
    }
}
