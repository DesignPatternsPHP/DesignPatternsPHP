<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class IdComparator.
 */
class IdComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function compare($a, $b)
    {
        if ($a['id'] == $b['id']) {
            return 0;
        } else {
            return $a['id'] < $b['id'] ? -1 : 1;
        }
    }
}
