<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\ChainOfResponsibilities;

/**
 * Handler is a generic handler in the chain of responsibilities
 */
abstract class Handler implements KeyValueStorage
{

    protected $successor = null;

    /**
     * Append a responsibility to the end of chain
     * 
     * A prepend method could be done with the same spirit
     * 
     * You could also send the successor in the contructor but in PHP it is a
     * bad idea because you have to remove the type-hint of the parameter because
     * the last handler has a null successor.
     * 
     * And if you override the contructor, your Handler can no longer have a
     * successor. One solution is to provide a NullObject (see pattern) 
     */
    final public function append(Handler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->append($handler);
        }
    }

    /**
     * Handle the request. 
     * 
     * This approach by using a template method pattern ensures you that 
     * each subclass will not forget to call the successor. Beside, the returned
     * boolean value indicates you if the request have been processed or not.
     */
    final public function handle(Request $req)
    {
        $processed = $this->processing($req);
        if (!$processed) {
            if (!is_null($this->successor)) {
                $processed = $this->successor->handle($req);
            }
        }

        return $processed;
    }

    abstract protected function processing(Request $req);
}