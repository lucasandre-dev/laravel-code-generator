<?php

namespace LucasandreDev\LaravelCodeGenerator\Commands;

use Illuminate\Console\Command;
use LucasandreDev\LaravelCodeGenerator\CodeGeneratorBuilder;
use LucasandreDev\LaravelCodeGenerator\Services\PathService;

class CodeGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code:generate {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates classes and codes from a template';

    /**
     * Execute the console command.
     * @throws \Exception
     */
    public function handle()
    {
        $defaultTemplateNumber = 0;
        $defaultTemplate = config("templates-code-generator.template_default");
        $templates = config("templates-code-generator.templates");
        $templatesNames = array_keys($templates);

        $mustForce = $this->option('force');
        $fullPath = $this->ask('What is the name of the entity in the singular? - Ex.: Customer');

        if (empty($fullPath)){
            throw new \Exception("enter a entity name");
        }

        $this->line("<fg=green> [TEMPLATES] </>");
        foreach ($templatesNames as $key => $name){
            $number = $key+1;
            $default = "";
            if($name === $defaultTemplate){
                $defaultTemplateNumber = $number;
                $default = " - <fg=yellow> [Default] </>";
            }

            $this->line($number .": ".$name.$default);
        }

        $templateNumber = $this->ask('Which template do you want to use? - <fg=yellow> [Default: '.$defaultTemplateNumber.'] </>');

        if (!empty($templateNumber) && intval($templateNumber) <= 0){
            throw new \Exception("Enter a valid model number");
        }

        $templateKey = $templateNumber-1;
        if (empty($templateNumber)){
            $templateKey = $defaultTemplateNumber-1;
        }

        $template = $templatesNames[$templateKey];

        $subPathAndEntity = PathService::splitPathIntoSubPathAndEntity($fullPath);

        CodeGeneratorBuilder::builder($subPathAndEntity->entity, $mustForce, $subPathAndEntity->baseDir)->operation($template)->render();
    }
}
