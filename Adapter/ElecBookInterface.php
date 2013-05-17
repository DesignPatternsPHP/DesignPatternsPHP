<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Adapter;

/**
 * ElecBookInterface is a contract for an electronic book
 */
interface ElecBookInterface
{

    function pressNext();

    function pressStart();
}