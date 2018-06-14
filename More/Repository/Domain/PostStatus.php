<?php

namespace DesignPatterns\More\Repository\Domain;

/**
 * Like PostId, this is a value object which holds the value of the current status of a Post. It can be constructed
 * either from a string or int and is able to validate itself. An instance can then be converted back to int or string.
 */
class PostStatus
{
    const STATE_DRAFT_ID = 1;
    const STATE_PUBLISHED_ID = 2;

    const STATE_DRAFT = 'draft';
    const STATE_PUBLISHED = 'published';

    private static $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED,
    ];

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    public static function fromInt(int $statusId)
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status)
    {
        self::ensureIsValidName($status);

        return new self(array_search($status, self::$validStates), $status);
    }

    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    /**
     * there is a reason that I avoid using __toString() as it operates outside of the stack in PHP
     * and is therefor not able to operate well with exceptions
     */
    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $status)
    {
        if (!in_array($status, array_keys(self::$validStates), true)) {
            throw new \InvalidArgumentException('Invalid status id given');
        }
    }


    private static function ensureIsValidName(string $status)
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new \InvalidArgumentException('Invalid status name given');
        }
    }
}
