<?php
namespace RickAndMorty\Domain\Entities;
class Character
{
    public function __construct(
        public int $id,
        public string $name,
        public string $status,
        public string $image,
    )
    {}
}
