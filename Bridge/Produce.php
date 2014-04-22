<?php

namespace DesignPatterns\Bridge;

/**
 * Concrete Implementation
 */
class Produce implements Workshop {

  public function work() {
    print 'Produced ';
  }

}
