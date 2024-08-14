<?php

namespace LucasandreDev\LaravelCodeGenerator\DTO;

class BaseAndEntityOutputDto
{

    public function __construct(
        public ?string $baseDir,
        public string $entity
    )
    {
    }
}
