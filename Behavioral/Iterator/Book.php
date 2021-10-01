<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Iterator;

class Book
{
    public function __construct(private string $title, private string $author)
    {
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
