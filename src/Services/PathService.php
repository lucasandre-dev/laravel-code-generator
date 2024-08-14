<?php

namespace LucasandreDev\LaravelCodeGenerator\Services;

use LucasandreDev\LaravelCodeGenerator\DTO\BaseAndEntityOutputDto;

class PathService
{
    public static function splitPathIntoSubPathAndEntity(string $fullPath): BaseAndEntityOutputDto
    {
        $lastSlashPos = strrpos($fullPath, '/');

        $baseDir = null;
        $entity = $fullPath;
        if($lastSlashPos !== false){
            $baseDir = substr($fullPath, 0, $lastSlashPos);
            $entity = substr($fullPath, $lastSlashPos + 1);
        }

        return new BaseAndEntityOutputDto(
            $baseDir,
            $entity
        );
    }
}
