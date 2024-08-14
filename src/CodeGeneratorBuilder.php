<?php

namespace LucasandreDev\LaravelCodeGenerator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CodeGeneratorBuilder
{
    private string $entityPascalCaseName;
    private string $entityCamelCaseName;

    private string $template;
    private ?string $subPaths = null;
    private string $entity;
    /** @var Operation[] */
    private array $operations = [];
    private array $replacements = [];
    private bool $force = false;
    private ?string $subPath = null;
    private ?string $disk = null;

    /**
     * @param string $entity
     * @param bool $force
     * @param string|null $subPath
     */
    private function __construct(string $entity, bool $force = false, ?string $subPath = null)
    {
        $allPaths = explode("/", $entity);

        if (count($allPaths) > 1){
            $this->entity = $allPaths[count($allPaths) - 1];
            unset($allPaths[count($allPaths) - 1]);
            $this->subPaths = implode("/", $allPaths);
        }else{
            $this->entity = $allPaths[0];
        }

        $this->force = $force;
        $this->subPath = $subPath;

        $this->disk = config("templates-code-generator.disk");

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
    public static function builder(string $entity, bool $force = false, ?string $basePath = null): self
    {
        return new self($entity, $force, $basePath);
    }

    /**
     * @throws \Exception
     */
    public function operation(string $template): self
    {
        $this->template = $template;
        $operations = config("templates-code-generator.templates.".$this->template.".operations");

        if (empty($operations)){
            throw new \Exception("operations not defined");
        }

        foreach ($operations as $template){
            if (empty($template)){
                throw new \Exception("operation empty");
            }

            $this->operations[] = $this->compileOperation($template);
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

        if (empty($operationArr['template_location']) || !Storage::disk($this->disk)->exists($operationArr['template_location'])){
            throw new \Exception("Mockup not found [".$operationArr['template_location']."]");
        }

        $basePath = $this->getBasePath();
        if (!empty($this->subPath)){
            $basePath .= $this->subPath."/";
        }

        $finalDestination = $basePath . $operationArr['final_destination'];

        $operation = new Operation(
            $operationArr['template_location'],
            str_replace("%entity%", $this->entity, $finalDestination),
            Storage::disk($this->disk)->get($operationArr['template_location']),
            $this->force,
            $this->disk
        );
        foreach ($this->replacements as $key=>$replacement){
            $operation->addReplacement($key, $replacement);
        }

        return $operation;
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|mixed
     */
    public function getBasePath(): mixed
    {
        $basePath = config("templates-code-generator.base_destination");

        if (!str_ends_with($basePath, '/')) {
            $basePath .= '/';
        }

        return $basePath;
    }
}
