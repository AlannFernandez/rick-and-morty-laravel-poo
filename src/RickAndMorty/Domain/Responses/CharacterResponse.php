<?php

namespace Responses;
class CharacterResponse
{
    public function __construct(
        public Info $info,
        public \Character $characters
    )
    {
    }
}
