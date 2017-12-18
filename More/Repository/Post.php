<?php

namespace DesignPatterns\More\Repository;

class Post
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @param array $state
     *
     * @return Post
     */
    public static function fromState(array $state): Post
    {
        return new self(
            $state['id'],
            $state['title'],
            $state['text']
        );
    }

    /**
     * @param int|null $id
     * @param string $text
     * @param string $title
     */
    public function __construct($id, string $title, string $text)
    {
        $this->id = $id;
        $this->text = $text;
        $this->title = $title;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
