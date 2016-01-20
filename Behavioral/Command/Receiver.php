<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Receiver is specific service with its own contract and can be only concrete.
 */
class Receiver
{
    private $enableDate = false;

    private $output = array();

    /**
     * @param string $str
     */
    public function write($str)
    {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }

    public function getOutput()
    {
        return implode("\n", $this->output);
    }

    /**
     * Enable receiver to display message date.
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * Disable receiver to display message date.
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}
