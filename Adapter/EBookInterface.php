<?php

namespace DesignPatterns\Adapter;

/**
 * EBookInterface is a contract for an electronic book
 */
interface EBookInterface
{

    function pressNext();

    function pressStart();
}