<?php

namespace DesignPatterns\More\Repository;

interface Storage
{
    public function persist(array $data): int;

    public function retrieve(int $id): array;

    public function delete(int $id);
}
