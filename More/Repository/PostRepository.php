<?php

namespace DesignPatterns\More\Repository;

/**
 * Repository for class Post
 * This class is between Entity layer(class Post) and access object layer(interface Storage).
 *
 * Repository encapsulates the set of objects persisted in a data store and the operations performed over them
 * providing a more object-oriented view of the persistence layer
 *
 * Repository also supports the objective of achieving a clean separation and one-way dependency
 * between the domain and data mapping layers
 *
 * Class PostRepository
 */
class PostRepository
{
    private $persistence;

    public function __construct(Storage $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * Returns Post object by specified id.
     *
     * @param int $id
     *
     * @return Post|null
     */
    public function getById($id)
    {
        $arrayData = $this->persistence->retrieve($id);
        if (is_null($arrayData)) {
            return;
        }

        $post = new Post();
        $post->setId($arrayData['id']);
        $post->setAuthor($arrayData['author']);
        $post->setCreated($arrayData['created']);
        $post->setText($arrayData['text']);
        $post->setTitle($arrayData['title']);

        return $post;
    }

    /**
     * Save post object and populate it with id.
     *
     * @param Post $post
     *
     * @return Post
     */
    public function save(Post $post)
    {
        $id = $this->persistence->persist(array(
            'author' => $post->getAuthor(),
            'created' => $post->getCreated(),
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ));

        $post->setId($id);

        return $post;
    }

    /**
     * Deletes specified Post object.
     *
     * @param Post $post
     *
     * @return bool
     */
    public function delete(Post $post)
    {
        return $this->persistence->delete($post->getId());
    }
}
