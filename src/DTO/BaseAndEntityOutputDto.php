<?php

namespace LucasandreDev\LaravelCodeGenerator\DTO;

readonly class BaseAndEntityOutputDto
{

    public function __construct(
        public ?string $baseDir,
        public string $entity
    )
    {
    }
}
