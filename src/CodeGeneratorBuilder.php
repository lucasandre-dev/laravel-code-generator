<?php

namespace LucasandreDev\LaravelCodeGenerator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CodeGeneratorBuilder
{
    private string $entityPascalCaseName;
    private string $entityCamelCaseName;

    private string $operationKey;
    private string $entity;
    /** @var Operation[] */
    private array $operations = [];
    private array $replacements = [];
    private bool $force = false;

    /**
     * @param string $entity
     * @param bool $force
     * @throws \Exception
     */
    private function __construct(string $entity, bool $force = false)
    {
        $this->entity = $entity;
        $this->force = $force;

        $this->entityPascalCaseName = Str::ucfirst($this->entity);
        $this->entityCamelCaseName = Str::camel($this->entity);
        $this->replacements = [
            "%PascalCase%" => $this->entityPascalCaseName,
            "%camelCase%" => $this->entityCamelCaseName,
        ];

        return $this;
    }

    /**
     * @throws \Exception
     */
    public static function builder(string $entity, bool $force = false): self
    {
        return new self($entity, $force);
    }

    /**
     * @throws \Exception
     */
    public function operation(string $operationKey): self
    {
        $this->operationKey = $operationKey;
        $operations = config("templates-code-generator.".$this->operationKey.".operations");

        if (empty($operations)){
            throw new \Exception("operations not defined");
        }

        foreach ($operations as $operationKey){
            if (empty($operationKey)){
                throw new \Exception("operation empty");
            }

            $this->operations[] = $this->compileOperation($operationKey);
        }

        return $this;
    }

    public function addReplacement(string $key, string $value): self
    {
        $this->replacements[$key] = $value;
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function render(): void
    {
        if (empty($this->operations)){
            throw new \Exception("operations not defined");
        }

        foreach ($this->operations as $operation){
            $operation->render();
        }
    }


    /**
     * COMPILERS
     */
    private function compileOperation(array $operationArr): Operation
    {
        if (!isset($operationArr['template_location'])){
            throw new \Exception("template_location required");
        }

        if (empty($operationArr['template_location']) || !Storage::exists($operationArr['template_location'])){
            throw new \Exception("Mockup not found [".$operationArr['template_location']."]");
        }

        $operation = new Operation(
            $operationArr['template_location'],
            str_replace("%entity%", $this->entity, $operationArr['final_destination']),
            Storage::get($operationArr['template_location']),
            $this->force
        );
        foreach ($this->replacements as $key=>$replacement){
            $operation->addReplacement($key, $replacement);
        }

        return $operation;
    }
}
