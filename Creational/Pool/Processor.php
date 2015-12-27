<?php

namespace DesignPatterns\Creational\Pool;

class Processor
{
    private $pool;
    private $processing = 0;
    private $maxProcesses = 3;
    private $waitingQueue = array();

    public function __construct(Pool $pool)
    {
        $this->pool = $pool;
    }

    public function process($image)
    {
        if ($this->processing++ < $this->maxProcesses) {
            $this->createWorker($image);
        } else {
            $this->pushToWaitingQueue($image);
        }
    }

    private function createWorker($image)
    {
        $worker = $this->pool->get();
        $worker->run($image, array($this, 'processDone'));
    }

    public function processDone($worker)
    {
        $this->processing--;
        $this->pool->dispose($worker);

        if (count($this->waitingQueue) > 0) {
            $this->createWorker($this->popFromWaitingQueue());
        }
    }

    private function pushToWaitingQueue($image)
    {
        $this->waitingQueue[] = $image;
    }

    private function popFromWaitingQueue()
    {
        return array_pop($this->waitingQueue);
    }
}
