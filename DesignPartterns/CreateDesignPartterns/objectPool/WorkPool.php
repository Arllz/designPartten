<?php


namespace DesignPartterns\CreateDesignPartterns\objectPool;

 use Countable;

class WorkPool implements Countable
{
    private  $cooupiedWorkers = [];

    private $freeWorks = [];

    public function get()
    {
        if (count($this->freeWorks) == 0) {
            $work = new StringReverseWork();
        } else {
            $work = array_pop($this->freeWorks);
        }
        $this->cooupiedWorkers[spl_object_hash($work)] = $work;
        return $work;
    }

    public function count()
    {
        return count($this->cooupiedWorkers) + count($this->freeWorks);
    }

    public function dispose(StringReverseWork  $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorks[$key] = $worker;
        }

    }
}