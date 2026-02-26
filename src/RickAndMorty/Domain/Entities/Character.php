<?php

class Character
{
    public function __construct(
        public int $id,
        public string $name,
        public string $status,
        public string $image,
        public Origin $origin,
    )
    {}
}
