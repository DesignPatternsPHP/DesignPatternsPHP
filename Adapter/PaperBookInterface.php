<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Adapter;

/**
 * PaperBookInterface is a contract for a book
 */
interface PaperBookInterface
{

    function turnPage();

    function open();
}