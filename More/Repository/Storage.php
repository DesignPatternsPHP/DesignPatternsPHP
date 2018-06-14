<?php

namespace DesignPatterns\More\Repository;

interface Storage
{
    public function generateId(): int;

    public function persist(array $data);

    public function retrieve(int $id): array;

    public function delete(int $id);
}
