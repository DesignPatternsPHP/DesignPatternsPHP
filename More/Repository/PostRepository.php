<?php

namespace DesignPatterns\More\Repository;

use DesignPatterns\More\Repository\Domain\Post;

/**
 * This class is situated between Entity layer (class Post) and access object layer (MemoryStorage).
 *
 * Repository encapsulates the set of objects persisted in a data store and the operations performed over them
 * providing a more object-oriented view of the persistence layer
 *
 * Repository also supports the objective of achieving a clean separation and one-way dependency
 * between the domain and data mapping layers
 */
class PostRepository
{
    /**
     * @var Storage
     */
    private $persistence;

    public function __construct(Storage $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId(): int
    {
        return $this->persistence->generateId();
    }

    public function findById(int $id): Post
    {
        try {
            $arrayData = $this->persistence->retrieve($id);
        } catch (\OutOfBoundsException $e) {
            throw new \OutOfBoundsException(sprintf('Post with id %d does not exist', $id), 0, $e);
        }

        return Post::fromState($arrayData);
    }

    public function save(Post $post)
    {
        $this->persistence->persist([
            'id' => $post->getId(),
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);
    }
}
