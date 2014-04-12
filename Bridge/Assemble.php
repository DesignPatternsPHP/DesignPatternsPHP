<?php

namespace DesignPatterns\Bridge;

class Assemble implements Workshop {

  public function work() {
    print 'Assembled';
  }

}
