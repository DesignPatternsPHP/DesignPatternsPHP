<?php

namespace DesignPatterns\More\Repository\Tests;

use DesignPatterns\More\Repository\MemoryStorage;
use DesignPatterns\More\Repository\Domain\Post;
use DesignPatterns\More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class PostRepositoryTest extends TestCase
{
    /**
     * @var PostRepository
     */
    private $repository;

    protected function setUp()
    {
        $this->repository = new PostRepository(new MemoryStorage());
    }

    public function testCanGenerateId()
    {
        $this->assertEquals(1, $this->repository->generateId());
    }

    /**
     * @expectedException \OutOfBoundsException
     * @expectedExceptionMessage Post with id 42 does not exist
     */
    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist()
    {
        $this->repository->findById(42);
    }

    public function testCanPersistPostDraft()
    {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->assertEquals($postId, $this->repository->findById($postId)->getId());
    }
}
