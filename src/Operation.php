<?php

namespace LucasandreDev\LaravelCodeGenerator;

use Illuminate\Support\Facades\Storage;

class Operation
{
    private string $templateLocation;
    private string $finalDestination;
    private string $templateString;
    private bool $force = false;
    private ?string $disk;
    private array $replacements = [];

    /**
     * @param string $templateLocation
     * @param string $finalDestination
     * @param string $templateString
     * @param bool $force
     * @param string|null $disk
     */
    public function __construct(string $templateLocation, string $finalDestination, string $templateString, bool $force = false, ?string $disk = null)
    {
        $this->templateLocation = $templateLocation;
        $this->finalDestination = $finalDestination;
        $this->templateString = $templateString;
        $this->force = $force;
        $this->disk = $disk;
    }

    public function addReplacement(string $key, string $value): void
    {
        $this->replacements[$key] = $value;
    }

    public function render(): void
    {
        $mockupCompiled = $this->compileTemplate();

        if ($this->fileExists() && !$this->force){
            throw new \Exception("File already exists [$this->finalDestination]");
        }

        Storage::disk($this->disk)->put($this->finalDestination, $mockupCompiled);
    }

    private function compileTemplate(): string
    {
        $compile = $this->templateString;
        foreach ($this->replacements as $key => $replacement){
            $compile = str_replace($key, $replacement, $compile);
        }

        return $compile;
    }

    private function fileExists(): bool
    {
        return Storage::disk($this->disk)->exists($this->finalDestination);
    }

    public function getTemplateLocation(): string
    {
        return $this->templateLocation;
    }

    public function getFinalDestination(): string
    {
        return $this->finalDestination;
    }

    public function getTemplateString(): string
    {
        return $this->templateString;
    }
}
