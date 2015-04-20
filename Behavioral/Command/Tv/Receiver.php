<?php

namespace DesignPatterns\Behavioral\Command\Tv;

class Receiver
{
    public $currentChannel = 0;

    /**
     * Turn On
     */
    public function turnOn()
    {
        echo "The television is on.";
    }

    /**
     * Turn Off
     */
    public function turnOff()
    {
        echo "The television is off.";
    }

    /**
     * changeChannel
     *
     * @param int $channelId
     */
    public function changeChannel($channelId = 0)
    {
        $this->currentChannel = $channelId;
        echo "Now TV channel is " . $this->currentChannel;
    }
}

