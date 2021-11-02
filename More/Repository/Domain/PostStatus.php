<?php

declare(strict_types=1);

namespace DesignPatterns\More\Repository\Domain;

use InvalidArgumentException;

/**
 * Like PostId, this is a value object which holds the value of the current status of a Post. It can be constructed
 * either from a string or int and is able to validate itself. An instance can then be converted back to int or string.
 */
class PostStatus
{
    public const STATE_DRAFT_ID = 1;
    public const STATE_PUBLISHED_ID = 2;

    public const STATE_DRAFT = 'draft';
    public const STATE_PUBLISHED = 'published';

    private static array $validStates = [
        self::STATE_DRAFT_ID => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED,
    ];

    public static function fromInt(int $statusId)
    {
        self::ensureIsValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    public static function fromString(string $status)
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given!');
        }

        return new self($state, $status);
    }

    private function __construct(private int $id, private string $name)
    {
    }

    public function toInt(): int
    {
        return $this->id;
    }

    /**
     * there is a reason that I avoid using __toString() as it operates outside of the stack in PHP
     * and is therefore not able to operate well with exceptions
     */
    public function toString(): string
    {
        return $this->name;
    }

    private static function ensureIsValidId(int $status)
    {
        if (!in_array($status, array_keys(self::$validStates), true)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }


    private static function ensureIsValidName(string $status)
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }
}
