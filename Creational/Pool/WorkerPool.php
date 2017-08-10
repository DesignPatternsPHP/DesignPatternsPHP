<?php

namespace DesignPatterns\Creational\Pool;

class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];

    /**
     * @return StringReverseWorker
     */
    public function get(): StringReverseWorker
    {
        $worker = (count($this->freeWorkers) === 0) ? new StringReverseWorker() : array_pop($this->freeWorkers);

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
