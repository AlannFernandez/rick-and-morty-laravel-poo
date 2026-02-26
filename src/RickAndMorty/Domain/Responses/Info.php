<?php

namespace Responses;

class Info
{
    public function __construct(
        public int $count,
        public int $pages,
        public string $next,
        public int $prev,
    )
    {}
}
